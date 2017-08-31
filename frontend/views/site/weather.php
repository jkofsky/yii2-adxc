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
    body {
        /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#f1f94f+0,a51731+40,2e7dea+100 */
        background: #f1f94f; /* Old browsers */
        background: -moz-radial-gradient(center, ellipse cover,  #f1f94f 0%, #a51731 40%, #2e7dea 100%); /* FF3.6-15 */
        background: -webkit-radial-gradient(center, ellipse cover,  #f1f94f 0%,#a51731 40%,#2e7dea 100%); /* Chrome10-25,Safari5.1-6 */
        background: radial-gradient(ellipse at center,  #f1f94f 0%,#a51731 40%,#2e7dea 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f1f94f', endColorstr='#2e7dea',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
        /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#de47ac+0,ad1283+50,1e5799+100 */
        /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#b7deed+0,7ccdea+40,8c3310+70,bf6e4e+100 */
    }
    .forcastLarge {
        font-size: 4em;
        font-weight: bold;
        line-height: 0.6em;
        margin-top: 0.6em;
    }
    .largeText { font-size: large;}
    .smallTxt { font-size: small;  }
    .panel {
        background-color: rgba(255,255,255,0.7);
        overflow-y: hidden;
    }
    .panel-heading {
        text-align: center;
    }
    .panel-title {
        font-size: 1.5em;
        font-weight: bolder;
        text-shadow: 0px -1px 0px rgba(30, 30, 30, 0.8);
    }

    @media(min-width: 992px) {
        .container-fluid {
            display: flex;
        }
        .panel { 
            height: 95%; 
        }
    }
</style>
<div class="container-fluid">
    <div class="col-md-4">
        <div id="current-conditions" class="panel panel-primary">
            <div class="panel-heading">
                <div>
                    Current Conditions for
                    <h2 class="panel-title"><?= strval($data->location->areaDescription); ?></h2>
                    <span class="smallTxt">
                        <?= "<b>Lat:&nbsp;</b> {$data->location->latitude}&deg;&nbsp;"; ?>
                        <?= "<b>Lon:&nbsp;</b> {$data->location->longitude}&deg;&nbsp;"; ?>
                        <?= "<b>Elev:&nbsp;</b> {$data->currentobservation->elev}ft.</span>"; ?>
                </div>
            </div>
            <div class="panel-body">
                <img class="pull-left img-thumbnail" style=" margin: 0 1em 1em 0;" 
                     src="<?= $_currIconPath . strval($data->currentobservation->Weatherimage); ?>"/>
                <p class="largeText"><?= strval($data->currentobservation->Weather); ?></p>
                <p class="forcastLarge text-center"><?= strval($data->currentobservation->Temp); ?>&deg;<br></p>
                <?php
                $tempF = floatval($data->currentobservation->Dewp);
                if (!is_numeric($data->currentobservation->WindChill)) :
                    ?>
                    <p class="text-center">Heat Index:<br><b><?= $nw->getHeatIndexStr(); ?></b></p>
                <?php else: ?>
                    <p class="text-center">Wind Chill:<br><b><?= $nw->getWindChillStr(); ?></b></p>
                <?php endif; ?>

                <div id="current_conditions_detail" class="pull-left" style="width:100%;">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-right"><b>Humidity:&nbsp;</b></td>
                                <td><?= strval($data->currentobservation->Relh); ?>&percnt;</td>
                            </tr>
                            <?php if (floatval($data->currentobservation->Windd) > 0): ?>
                                <tr>
                                    <td class="text-right"><b>Wind Speed:&nbsp;</b></td>
                                    <td><?= $nw->getWindDirectionStr(); ?>&nbsp;
                                        <?= intval($data->currentobservation->Winds); ?> mph</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><b>Gusting to:&nbsp;</b></td>
                                    <td><?= intval($data->currentobservation->Gust); ?> mph</td>
                                </tr>
                            <?php else: ?>
                                <tr>
                                    <td class="text-right"><b>Wind Speed:&nbsp;</b></td>
                                    <td>Calm</td>
                                </tr>
                            <?php endif; ?>
                            <tr>
                                <td class="text-right"><b>Barometer:&nbsp;</b></td>
                                <?php
                                $inches = floatval($data->currentobservation->SLP);
                                $mb = floatval($data->currentobservation->Altimeter); //$inches * 33.8637526;
                                ?>
                                <td><?= "{$inches} in ({$mb} mb)" ?></td>
                            </tr>
                            <tr>
                                <td class="text-right"><b>Dewpoint:&nbsp;</b></td>
                                <?php
                                //$tempF = floatval($data->currentobservation->Dewp);
                                $tempC = round($nw->convertF2C($tempF), 1);
                                ?>
                                <td><?= "{$tempF}&deg; F ({$tempC}&deg; C)" ?></td>
                            </tr>
                            <tr>
                                <td class="text-right"><b>Visibility:&nbsp;</b></td>
                                <td><?= strval($data->currentobservation->Visibility); ?> mi</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td class="text-right"><b>Last update:&nbsp;</b></td>
                                <td><?= strval($data->currentobservation->Date); ?></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php for ($idx = 0; $idx < 4; ++$idx) { ?>
        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-heading"><?= $_forecast[$idx]['PeriodName']; ?></div>
                <div class="panel-body">
                    <img class="img-responsive center-block img-thumbnail" src="<?= $_forecast[$idx]['IconLink']; ?>"/>
                    <p class="forcastLarge text-center"><?= $_forecast[$idx]['Temperature']; ?>&deg;<br>
                        <span class="largeText text-center"><?= $_forecast[$idx]['TemperatureLabel']; ?></span></p>
                    <p><?= $_forecast[$idx]['Forcast']; ?></p>
                </div><!--/panel-body -->
            </div><!--/panel-->
        </div><!--/col-->
    <?php } // Next $idx   ?>
</div>
<div class="row">
    <div class="text-center">
        <img src="<?= Yii::getAlias('@web/images/header_nws.png'); ?>" alt="Forecast from The National Weather Service">
    </div>
</div>
