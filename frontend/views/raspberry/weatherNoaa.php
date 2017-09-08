<?php
/* @var $this yii\web\View */
/* @var $nw   json formatted weather data */

$this->title = 'Local Weather';

$data = $nw->jsonData;
$_forecast = $nw->getForecast();
$tmp = parse_url($_forecast[0]['IconLink']);
$_currIconPath = $tmp['scheme'] . '://' . $tmp['host'] . "/newimages/large/";
?>
<style>
    html, body {height: 1080px; overflow: hidden;}
    body {
        /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#f1f94f+0,a51731+40,2e7dea+100 */
        background: #a51731; /* Old browsers */
        background: -moz-radial-gradient(center, ellipse cover,  #f1f94f 0%, #a51731 40%, #2e7dea 100%); /* FF3.6-15 */
        background: -webkit-radial-gradient(center, ellipse cover,  #f1f94f 0%,#a51731 40%,#2e7dea 100%); /* Chrome10-25,Safari5.1-6 */
        background: radial-gradient(ellipse at center,  #f1f94f 0%,#a51731 40%,#2e7dea 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f1f94f', endColorstr='#2e7dea',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */

    }
    li.media p{
        margin: 1px;
    }
    li.day-time {
        border: 1px solid #ccc;
        background: #eee;
        font-weight: bold;
        color: #222;
        text-shadow: 1px 1px 0px #fff;
        background-image: -webkit-gradient(linear,left top,left bottom,from( #fff ),to( #f1f1f1 ));
        background-image: -webkit-linear-gradient( #fff,#f1f1f1 );
        background-image: -moz-linear-gradient( #fff,#f1f1f1 );
        background-image: -ms-linear-gradient( #fff,#f1f1f1 );
        background-image: -o-linear-gradient( #fff,#f1f1f1 );
        background-image: linear-gradient( #fff,#f1f1f1 );
        text-shadow: 1px 1px 0px rgba(255, 255, 255, 1);
    }
    li.night-time {
        border: 1px solid #4d4d4d;
        background: #4d4d4d;
        font-weight: bold;
        color: #ffffff;
        text-shadow: 1px 1px 0px #444444;
        background-image: -webkit-gradient(linear, left top, left bottom, from( #545454 ), to( #454545 ));
        background-image: -webkit-linear-gradient( #545454, #454545);
        background-image: -moz-linear-gradient( #545454, #454545);
        background-image: -ms-linear-gradient( #545454, #454545);
        background-image: -o-linear-gradient( #545454, #454545 );
        background-image: linear-gradient( #545454, #454545);
        text-shadow: 1px 1px 0px rgba(0, 0, 0, 1);
    }
    #current-conditions { 
        background-color: rgba(255, 255, 255, 0.5); 
        text-shadow: 1px 1px 0px rgba(255, 255, 255, 0.6);
    }
    #current_conditions_detail { font-weight: bolder; }
    #kiosk {margin: 1em 0px;}
    .box-shadow { box-shadow: 4px 4px 2px rgba(0, 0, 0, 0.5); }
    .container { margin: 1em; width: 100%;}
    .forcastLarge {
        font-size: 4em;
        font-weight: bold;
        line-height: 0.5em;
        margin-top: 0.5em;
    }
    .high-temperature { color: red; }
    .low-temperature { color: lightskyblue;}
    .media-heading { font-size:1.3em; }
    .text-small {font-size: smaller;}
</style>
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
            <div class="col-md-5" style="font-size: 2em;">
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
            <div id="current_conditions_detail" class="media-right col-md-7">
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="text-right">Humidity:&nbsp;</td>
                            <td><?= strval($data->currentobservation->Relh); ?>&percnt;</td>
                        </tr>
                        <?php if (floatval($data->currentobservation->Windd) > 0): ?>
                            <tr>
                                <td class="text-right"><b>Wind Speed:&nbsp;</b></td>
                                <td><?= $nw->getWindDirectionStr(); ?>&nbsp;
                                    <?= intval($data->currentobservation->Winds); ?> mph</td>
                            </tr>
                            <tr>
                                <td class="text-right">Gusting to:&nbsp;</td>
                                <td><?= intval($data->currentobservation->Gust); ?> mph</td>
                            </tr>
                        <?php else: ?>
                            <tr>
                                <td class="text-right">Wind Speed:&nbsp;</td>
                                <td>Calm</td>
                            </tr>
                        <?php endif; ?>
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
        </div>
    </li>

    <?php
    for ($idx = 0; $idx < 7; ++$idx) {
        $dayTimeClass = strtolower($_forecast[$idx]['TemperatureLabel']) == 'low' ? ' night-time ' : ' day-time ';
        $temperatureClass = strtolower($_forecast[$idx]['TemperatureLabel']) == 'low' ? ' low-temperature ' : ' high-temperature ';
        ?>
        <li class="media <?= $dayTimeClass ?>" style="margin: 0px;">
            <div class="media-left">
                <img class="media-object " src="<?= $_forecast[$idx]['IconLink']; ?>" alt="<?= $_forecast[$idx]['Condition']; ?>">
            </div>
            <div class="media-body">
                <div class="media-heading"><?= $_forecast[$idx]['PeriodName']; ?></div>
                <p><?= $_forecast[$idx]['Condition']; ?></p>
                <p><?= $_forecast[$idx]['TemperatureLabel']; ?> 
                    <span class="<?= $temperatureClass ?>"><?= $_forecast[$idx]['Temperature']; ?>&deg;</span></p>
                <p style="font-size: 1em; font-weight: normal;"><?= $_forecast[$idx]['Forcast']; ?></p>
            </div><!--/media-body-->
        </li><!--/media-->
    <?php } // Next $idx    ?>
</ul>
