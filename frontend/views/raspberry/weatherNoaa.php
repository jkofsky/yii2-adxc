<?php
/* @var $this yii\web\View */
/* @var $nw   json formatted weather forecast data */

use yii\bootstrap4\Html;

$data = $nw->jsonData;
$_forecast = $nw->getForecast();
$tmp = parse_url($_forecast[0]['IconLink']);
$_currIconPath = $tmp['scheme'] . '://' . $tmp['host'] . "/newimages/large/";
$this->title = strval($data->location->areaDescription) . ' Weather';
?>
<div class="wx-index">
    <ul class="media-list list-unstyled">
        <li class="media day-time" style="padding: 0.5em 1em;">
            <div class="media-body">
                <h1 class="media-heading" style="font-size: 3em;">Forecast for <?= strval($data->location->areaDescription); ?></h1>
                <p class="text-small">
                    <?= "<b>Lat:&nbsp;</b> {$data->location->latitude}&deg;&nbsp;"; ?>
                    <?= "<b>Lon:&nbsp;</b> {$data->location->longitude}&deg;&nbsp;"; ?>
                    <?= "<b>Elev:&nbsp;</b> {$data->currentobservation->elev}ft."; ?>
                </p>
            </div>
            <figure class="media-right">
                <figcaption class="text-right text-small">Information gathered from</figcaption>
                <img class="media-object box-shadow" src="<?= Yii::getAlias('@web/images/header_nws.png'); ?>" alt="Forecast from The National Weather Service">
            </figure>
        </li>
        <li id="current-conditions" class="media">
            <div class="media-left">
                <img src="<?= $_currIconPath . strval($data->currentobservation->Weatherimage); ?>" class="media-object img-thumbnail" alt="<?= $_currIconPath . strval($data->currentobservation->Weatherimage); ?>">
            </div>
            <div class="media-body">
                <div class="col-md-4" style="font-size: 2em;">
                    <h4 class="media-heading" style="font-size: 1.5em; font-weight:bolder;"><?= strval($data->currentobservation->Weather); ?></h4>
                    <br>
                    <p class="forcastLarge text-center"><?= strval($data->currentobservation->Temp); ?>&deg;</p>
                    <br>
                    <?php
                    $tempF = floatval($data->currentobservation->Dewp);
                    if (!is_numeric($data->currentobservation->WindChill)) :
                        ?>
                        <p style="text-align: center; font-size: .70em;">Heat Index<br><b><?= $nw->getHeatIndexStr(); ?></b></p>
                    <?php else: ?>
                        <p class="text-small text-center">Wind Chill<br><b><?= $nw->getWindChillStr(); ?></b></p>
                    <?php endif; ?>
                </div>
                <div id="current_conditions_detail" class="media-right col-md-4">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-right">Humidity:&nbsp;</td>
                                <td><?= strval($data->currentobservation->Relh); ?>&percnt;</td>
                            </tr>
                            <tr>
                                <?php if (floatval($data->currentobservation->Windd) > 0): ?>
                                    <td class="text-right"><b>Wind Speed:&nbsp;</b></td>
                                    <td><?= $nw->getWindDirectionStr(); ?>&nbsp;
                                        <?= intval($data->currentobservation->Winds); ?> mph
                                        <?php
                                        if (intval($data->currentobservation->Gust)) {
                                            echo "({$data->currentobservation->Gust} mph Gusts)";
                                        }
                                        ?>
                                    </td>
                                <?php else: ?>
                                    <td class="text-right">Wind Speed:&nbsp;</td>
                                    <td>Calm</td>
                                <?php endif; ?>
                            </tr>
                            <tr>
                                <td class="text-right">Barometer:&nbsp;</td>
                                <?php
                                $inches = floatval($data->currentobservation->SLP);
                                $mb = floatval($data->currentobservation->Altimeter); //$inches * 33.8637526;
                                ?>
                                <td><?= "{$inches} in ({$mb} mb)" ?></td>
                            </tr>
                            <tr>
                                <td class="text-right">Dewpoint:&nbsp;</td>
                                <?php
                                //$tempF = floatval($data->currentobservation->Dewp);
                                $tempC = round($nw->convertF2C($tempF), 1);
                                ?>
                                <td><?= "{$tempF}&deg; F ({$tempC}&deg; C)" ?></td>
                            </tr>
                            <tr>
                                <td class="text-right">Visibility:&nbsp;</td>
                                <td><?= strval($data->currentobservation->Visibility); ?> mi</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td class="text-right">Last update:&nbsp;</td>
                                <td><?= strval($data->currentobservation->Date); ?></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <?php
                $dayTimeClass = strtolower($_forecast[0]['TemperatureLabel']) == 'low' ? ' night-time ' : ' day-time ';
                $temperatureClass = strtolower($_forecast[0]['TemperatureLabel']) == 'low' ? ' low-temperature ' : ' high-temperature ';
                ?>
                <div id="current-forcast" class="col-md-4 <?= $dayTimeClass ?>">
                    <div class="media-left">
                        <img class="media-object img-thumbnail" src="<?= $_forecast[0]['IconLink']; ?>" alt="<?= $_forecast[0]['Condition']; ?>">
                    </div>
                    <div class="media-body">
                        <div class="media-heading"><?= $_forecast[0]['PeriodName']; ?></div>
                        <p><?= $_forecast[0]['Condition']; ?></p>
                        <p><?= $_forecast[0]['TemperatureLabel']; ?> 
                            <span class="<?= $temperatureClass ?>"><?= $_forecast[0]['Temperature']; ?>&deg;</span></p>
                        <p style="font-size: 1em; font-weight: normal;"><?= $_forecast[0]['Forcast']; ?></p>
                    </div><!--/media-body-->
                </div>
            </div>
        </li>

        <?php
        for ($idx = 1; $idx < 8; ++$idx) { // $idx check MAX 14 (ie $idx < 14)
            $item = $_forecast[$idx];
            $dayTimeClass = strtolower($item['TemperatureLabel']) == 'low' ? ' night-time ' : ' day-time ';
            $temperatureClass = strtolower($item['TemperatureLabel']) == 'low' ? ' low-temperature ' : ' high-temperature ';
            ?>
            <li class="media <?= $dayTimeClass ?>" style="margin: 0px;">
                <div class="media-left">
                    <img class="media-object img-thumbnail" src="<?= $item['IconLink']; ?>" alt="<?= $item['Condition']; ?>">
                </div>
                <div class="media-body">
                    <div class="media-heading"><?= $item['PeriodName']; ?></div>
                    <p><?= $item['Condition']; ?></p>
                    <p><?= $item['TemperatureLabel']; ?> 
                        <span class="<?= $temperatureClass ?>"><?= $item['Temperature']; ?>&deg;</span></p>
                    <p style="font-size: 1em; font-weight: normal;"><?= $item['Forcast']; ?></p>
                </div><!--/media-body-->
            </li><!--/media-->
        <?php } // Next $idx      ?>
    </ul>
</div>