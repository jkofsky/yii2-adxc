<?php

/**
 * Description of noaaWeather
 *
 * Get the current and 7 day forecast weather data from weather.gov.
 * The current conditions is only updated approximately once an hour.
 * Using weather.gov recommendations, that the data is actually only requested 
 * a limited number of times per hour from thier servers. 
 * (I set to 15min intervals) 
 * 
 * These default to Pensacola, Florida.
 * @property float $latatude  Latatude for requested weather forecast
 * @property float $longitude Longitude for requested weather forecast
 * 
 * @property-read string $url The URL that was used for the reuest
 * @property-read mixed $jsonData The raw data as Object
 *
 * @category   Weather
 * @package    noaaWeather
 * @author     jkofsky
 * @copyright  Copyright (c) 2016
 * @license    BSD License
 * @version    $Id:$
 * 
 * @since      File available since Initial Release 
 */

class noaaWeather {

    public $latatude = 30.4447;
    public $longitude = -87.1895;
    public $url;
    public $jsonData;
    private $_jsonFile;
    private $_heatIndexF;
    private $_heatIndexStr;

    /**
     * Pull and Save forecast data in a cache file
     */
    public function __construct() {
        // Check & Setup the cache directory
        $this->_jsonFile = Yii::getAlias('@runtime/cache/');
        if (!is_dir($this->_jsonFile)) {
            mkdir($this->_jsonFile, 0777, true);
        }
        //        
        // Setup the request URL to receive the forcast in JSON format
        $this->url = 'http://forecast.weather.gov/MapClick.php?'
                . 'lat=' . $this->latatude
                . '&lon=' . $this->longitude
                . '&e=1&FcstType=json';     // request JSON format (FcstType=json)
        //
        // Add the actual cache filename
        $this->_jsonFile .= 'noaa-' . md5($this->url) . '.json';
        //
        // Check for the cache file OR if the cached data is outdated
        if (!file_exists($this->_jsonFile) ||
                (filemtime($this->_jsonFile) < strtotime('-15 minutes'))) {
            // NOAA requires a "Browser" to access the data
            $options = array('http' => array('user_agent' => 'adxcWeatherAgent v0.9'));

            $context = stream_context_create($options);
            $this->jsonData = file_get_contents($this->url, false, $context);
            file_put_contents($this->_jsonFile, $this->jsonData);
        }
    }

    /**
     * Loads the weather data from the cached file.
     */
    public function loadData() {
        $tmp = file_get_contents($this->_jsonFile);
        $this->jsonData = json_decode($tmp);
        $tf = floatval($this->jsonData->currentobservation->Temp);
        $dew = floatval($this->jsonData->currentobservation->Dewp);
        $this->calcHeatIndexDew($tf, $dew);
    }

    /**
     * Gets the Location data from data cache
     * @return mixed
     */
    public function getLocationData() {
        return $this->jsonData->location;
    }

    /**
     * 
     * @return mixed
     */
    public function getCurrentObservationData() {
        return $this->jsonData->currentobservation;
    }

    /**
     * 
     * @return array
     */
    public function getForecast() {
        $_forecast = array();
        $data = $this->jsonData;
        // put your code here
        for ($idx = 0; $idx < count($data->time->startPeriodName); ++$idx) {
            $_forecast[$idx]['PeriodName'] = strval($data->time->startPeriodName[$idx]);
            $_forecast[$idx]['CloudCover'] = strval($data->data->weather[$idx]);
            $_forecast[$idx]['TemperatureLabel'] = strval($data->time->tempLabel[$idx]);
            $_forecast[$idx]['Temperature'] = intval($data->data->temperature[$idx]);
            $_forecast[$idx]['Forcast'] = strval($data->data->text[$idx]);
            $_forecast[$idx]['RainChance'] = intval($data->data->pop[$idx]);
            $_forecast[$idx]['IconLink'] = strval($data->data->iconLink[$idx]);
            $_forecast[$idx]['StartTime'] = strval($data->time->startValidTime[$idx]);
        }
        return $_forecast;
    }

    /**
     * Heat index computed by using air temperature and dew point temperature. 
     * Degrees Fahrenheit
     * 
     * Steps to calculate:
     *    1.  Convert Temperature (Tc) and DewPoint (Tdc) to degrees C
     *    2.  Using Tc and Tdc, calculate the vapor pressure and saturation 
     *        vapor pressure.
     *    3.  Calculate RH = (E/Es)*100
     * 
     * Modified the code from the National Weather Service JavaScript Calculator.
     * @link http://www.wpc.ncep.noaa.gov/html/heatindex.shtml 
     *
     * @param int|float $temperature Temperature in Fahrenheit
     * @param int|float $dewPoint    Dew Point in Fahrenheit
     * @return bool Calcuation was sucessful.
     */
    public function calcHeatIndexDew($temperature, $dewPoint) {
        $Tc = $this->convertF2C($temperature);
        $Tdc = $this->convertF2C($dewPoint);
        if ($Tc < $Tdc) {
            $this->_heatIndexStr = "Dew Point must be less than the air temperature.";
            return false;
        } else if ($temperature <= 40.0) {
            $hi = $temperature;
        } else {
            $vaporpressure = 6.11 * (pow(10, 7.5 * ($Tdc / (237.7 + $Tdc))));
            $satvaporpressure = 6.11 * (pow(10, 7.5 * ($Tc / (237.7 + $Tc))));
            $RHumidity2 = round(100.0 * ($vaporpressure / $satvaporpressure));


            $hitemp = 61.0 + (($temperature - 68.0) * 1.2) + ($RHumidity2 * 0.094);
            $fptemp = (float) $temperature;
            $hifinal = 0.5 * ($fptemp + $hitemp);

            if ($hifinal > 79.0) {
                $hi = -42.379 + 2.04901523 * $temperature + 10.14333127 * $RHumidity2 - 0.22475541 * $temperature * $RHumidity2 - 6.83783 * (pow(10, -3)) * (pow($temperature, 2)) - 5.481717 * (pow(10, -2)) * (pow($RHumidity2, 2)) + 1.22874 * (pow(10, -3)) * (pow($temperature, 2)) * $RHumidity2 + 8.5282 * (pow(10, -4)) * $temperature * (pow($RHumidity2, 2)) - 1.99 * (pow(10, -6)) * (pow($temperature, 2)) * (pow($RHumidity2, 2));

                if (($RHumidity2 <= 13.0) && ($temperature >= 80.0) &&
                        ($temperature <= 112.0)) {
                    $adj1 = (13.0 - $RHumidity2) / 4.0;
                    $adj2 = sqrt((17.0 - abs($temperature - 95.0)) / 17.0);
                    $adj = $adj1 * $adj2;
                    $hi = $hi - $adj;
                } else if (($RHumidity2 > 85.0) && ($temperature >= 80.0) &&
                        ($temperature <= 87.0)) {
                    $adj1 = ($RHumidity2 - 85.0) / 10.0;
                    $adj2 = (87.0 - $temperature) / 5.0;
                    $adj = $adj1 * $adj2;
                    $hi = $hi + $adj;
                }
            } else {
                $hi = $hifinal;
            }
        }
        $this->_heatIndexF = round($hi, 1);
        return true;
    }

    /**
     * Convert a Fahrenheit temperature to Celsius
     * 
     * @param int|float $Fahr Temperature in Fahrenheit
     * @return float
     */
    public function convertF2C($Fahr) {
        return floatval(($Fahr - 32) * .556);
    }

    /**
     * Gets the Heat Index in Fahrenheit or Celsius depending on the $units.
     * 
     * @param string $units Requested scale 'f' or 'c', defaults to Fahrenheit.
     * @return float
     */
    public function getHeatIndex($units = 'f') {
        $scale = strtolower(substr($units, 0, 1));
        return ($scale == 'c') ? round($this->convertF2C($this->heatIndexF), 1) : $this->heatIndexF;
    }

    /**
     * Gets the Heat Index as a string. 
     * Given: 85 F temperature & Dew Point: 75 F
     * Returns: "93 F / 34 C"
     * 
     * Can also return the Heat Index calculation error.
     * 
     * @return string 
     */
    public function getHeatIndexStr() {
        return isset($this->_heatIndexStr) ? $this->_heatIndexStr :
                $this->_heatIndexF . "&deg; F" . " (" .
                round($this->convertF2C($this->_heatIndexF), 1) . "&deg; C)";
    }

    /**
     * Gets the Wind Chill Index as a string. 
     * 
     * @return string 
     */
    public function getWindChillStr() {
        $wcf = $this->jsonData->currentobservation->WindChill;
        if (is_numeric($wcf)) {
            $Fahr = $wcf;
            return $Fahr . "&deg; F" . " / " .
                    round($this->convertF2C($Fahr), 1) . "&deg; C";
        } else {
            return $wcf;
        }
    }

    /**
     * Get the abbreviation of the wind direction.
     * 
     * @param int|float $degrees Wind direction in degrees
     * @return string 
     */
    public function getWindDirection($degrees) {
        $dir = '';
        switch (true) {
            case ($degrees >= 11.25 && $degrees <= 33.75 ):
                $dir = 'NNE';
                break;
            case ($degrees >= 33.75 && $degrees <= 56.25 ):
                $dir = 'NE';
                break;
            case ($degrees >= 56.25 && $degrees <= 78.75 ):
                $dir = 'ENE';
                break;
            case ($degrees >= 78.75 && $degrees <= 101.25 ):
                $dir = 'East';
                break;
            case ($degrees >= 101.25 && $degrees <= 123.75 ):
                $dir = 'ESE';
                break;
            case ($degrees >= 123.75 && $degrees <= 146.25 ):
                $dir = 'SE';
                break;
            case ($degrees >= 146.25 && $degrees <= 168.75 ):
                $dir = 'SSE';
                break;
            case ($degrees >= 168.75 && $degrees <= 191.25):
                $dir = 'South';
                break;
            case ($degrees >= 191.25 && $degrees <= 213.75):
                $dir = 'SSW';
                break;
            case ($degrees >= 213.75 && $degrees <= 236.25):
                $dir = 'SW';
                break;
            case ($degrees >= 236.25 && $degrees <= 258.75):
                $dir = 'WSW';
                break;
            case ($degrees >= 258.75 && $degrees <= 281.25):
                $dir = 'West';
                break;
            case ($degrees >= 281.25 && $degrees <= 303.75):
                $dir = 'WNW';
                break;
            case ($degrees >= 303.75 && $degrees <= 326.25):
                $dir = 'NW';
                break;
            case ($degrees >= 326.25 && $degrees <= 348.75):
                $dir = 'NNW';
                break;
            case 0:
                $dir = 'Calm';
                break;
            default:
                // North is between 348.75 & 11.25
                $dir = "North";
                break;
        }
        return $dir;
    }

    /**
     * Gets the Wind direction for the current observations
     * 
     * @return string
     */
    public function getWindDirectionStr() {
        return $this->getWindDirection(floatval($this->jsonData->currentobservation->Windd));
    }

}
