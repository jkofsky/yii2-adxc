<?php
/* @var $this yii\web\View */
/* @var $nw   json formatted weather data */

$this->title = 'Local Weather';

$data = $nw->jsonData;
$_forecast = $nw->getForecast();
$tmp = parse_url($_forecast[0]['IconLink']);
$_currIconPath = $tmp['scheme'] . '://' . $tmp['host'] . "/newimages/large/";
?>
<!DOCTYPE html>
<html class="ui-mobile">
    <head>
        <title><?= $this->title ?></title>
        <style>
            .ui-content {
                border-width: 0;
                overflow: visible;
                overflow-x: hidden;
                padding: 15px;
            }
            body {
                height: 100%;
                margin: 0;
                padding: 0;
            }
            .ui-body-c, .ui-overlay-c {
                border: 1px solid #aaa;
                color: #333;
                text-shadow: 0px 1px 0px #fff;
                background: #f9f9f9;
                background-image: -webkit-gradient(linear,left top,left bottom,from( #f9f9f9 ),to( #eee ));
                background-image: -webkit-linear-gradient( #f9f9f9,#eee );
                background-image: -moz-linear-gradient( #f9f9f9,#eee );
                background-image: -ms-linear-gradient( #f9f9f9,#eee );
                background-image: -o-linear-gradient( #f9f9f9,#eee );
                background-image: linear-gradient( #f9f9f9,#eee );
            }
            .ui-body-c, .ui-body-c input, .ui-body-c select, .ui-body-c textarea, .ui-body-c button {
                font-family: Helvetica,Arial,sans-serif;
            }
            .ui-mobile fieldset, .ui-page {
                padding: 0;
                margin: 0;
            }
            .ui-page {
                outline: none;
            }
            .ui-page-header-fixed {
                padding-top: 2.68em;
            }
            .ui-mobile [data-role=page], .ui-mobile [data-role=dialog], .ui-page {
                top: 0px;
                left: 0px;
                width: 100%;
                min-height: 100%;
                position: absolute;
                display: none;
                border: 0;
            }
            .ui-mobile .ui-page-active {
                display: block;
                overflow: visible;
            }
            .ui-mobile, .ui-mobile body {
                height: 99.9%;
            }
            /* @media screen and (orientation:landscape) */
            .ui-mobile, .ui-mobile .ui-page {
                min-height: 300px;
            }
            .ui-overlay-c {
                background-image: none;
                border-width: 0;
            }
            .ui-mobile-viewport {
                margin: 0;
                overflow-x: visible;
                -webkit-text-size-adjust: 100%;
                -ms-text-size-adjust: none;
                -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            }
            html {
                height: 100%;
            }
            body.ui-mobile-viewport, div.ui-mobile-viewport {
                overflow-x: hidden;
            }
            .mediumwords {
                font-size: 0.8em;
            }
            /* @media all and (min-width:650px) */
            .mediumwords {
                font-size: 1em;
            }
            /* @media all and (min-width:750px) */
            .mediumwords {
                font-size: 1.2em;
            }
            /* @media all and (min-width:1200px) */
            .mediumwords {
                font-size: 1.4em;
            }
            .ui-corner-all {
                -webkit-border-radius: .6em;
                border-radius: .6em;
            }
            .ui-corner-all, .ui-btn-corner-all {
                -webkit-background-clip: padding;
                background-clip: padding-box;
            }
            .ui-shadow {
                -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, .2);
                -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, .2);
                box-shadow: 0px 1px 3px rgba(0,0,0,0.2);
            }
            .ui-listview {
                margin: 0;
            }
            .ui-btn-up-c {
                border: 1px solid #ccc;
                background: #eee;
                font-weight: bold;
                color: #222;
                text-shadow: 0px 1px 0px #fff;
                background-image: -webkit-gradient(linear,left top,left bottom,from( #fff ),to( #f1f1f1 ));
                background-image: -webkit-linear-gradient( #fff,#f1f1f1 );
                background-image: -moz-linear-gradient( #fff,#f1f1f1 );
                background-image: -ms-linear-gradient( #fff,#f1f1f1 );
                background-image: -o-linear-gradient( #fff,#f1f1f1 );
                background-image: linear-gradient( #fff,#f1f1f1 );
            }
            .ui-btn-up-c, .ui-btn-hover-c, .ui-btn-down-c {
                font-family: Helvetica,Arial,sans-serif;
                text-decoration: none;
            }
            .ui-btn {
                display: block;
                text-align: center;
                cursor: pointer;
                position: relative;
                margin: .5em 0;
                padding: 0;
            }
            .ui-btn-text {
                position: relative;
                z-index: 1;
                width: 100%;
                -moz-user-select: none;
                -webkit-user-select: none;
                -ms-user-select: none;
            }
            .ui-btn-inner {
                border-top: 1px solid #fff;
                border-color: rgba(255, 255, 255, .3);
            }
            .ui-btn-inner {
                font-size: 16px;
                padding: .6em 20px;
                min-width: 0.75em;
                display: block;
                position: relative;
                text-overflow: ellipsis;
                overflow: hidden;
                white-space: nowrap;
                zoom: 1;
            }
            .ui-btn-inner, .ui-btn-text {
                -webkit-border-radius: inherit;
                border-radius: inherit;
            }
            .ui-listview, .ui-li {
                list-style: none;
                padding: 0;
            }
            .ui-content .ui-listview, .ui-panel-inner > .ui-listview {
                margin: -15px;
            }
            .ui-content .ui-listview-inset, .ui-panel-inner .ui-listview-inset {
                margin: 1em 0;
            }
            .ui-li, .ui-field-contain.ui-li {
                display: block;
                margin: 0;
                position: relative;
                overflow: visible;
                text-align: left;
                border-width: 0;
                border-top-width: 1px;
            }
            .ui-btn-up-j {
                border: 1px solid #4d4d4d;
                background: #4d4d4d /*{j-bup-background-color}*/;
                font-weight: bold;
                color: #ffffff;
                text-shadow: 0px 1px 0px #444444;
                background-image: -webkit-gradient(linear, left top, left bottom, from( #545454 /*{j-bup-background-start}*/), to( #454545 /*{j-bup-background-end}*/));
                background-image: -webkit-linear-gradient( #545454 /*{j-bup-background-start}*/, #454545 /*{j-bup-background-end}*/);
                background-image: -moz-linear-gradient( #545454 /*{j-bup-background-start}*/, #454545 /*{j-bup-background-end}*/);
                background-image: -ms-linear-gradient( #545454 /*{j-bup-background-start}*/, #454545 /*{j-bup-background-end}*/);
                background-image: -o-linear-gradient( #545454 /*{j-bup-background-start}*/, #454545 /*{j-bup-background-end}*/);
                background-image: linear-gradient( #545454 /*{j-bup-background-start}*/, #454545 /*{j-bup-background-end}*/);
            }
            .ui-btn-up-j, .ui-btn-hover-j, .ui-btn-down-j {
                font-family: Helvetica, Arial, sans-serif;
                text-decoration: none;
            }
            .ui-btn.ui-li, .ui-field-contain.ui-li, .ui-li-divider, .ui-li-static {
                margin: 0;
            }
            .ui-btn-icon-right .ui-btn-inner {
                padding-right: 40px;
            }
            .ui-listview-inset .ui-li {
                border-right-width: 1px;
                border-left-width: 1px;
            }
            .ui-li .ui-btn-inner a.ui-link-inherit, .ui-li.ui-li-static {
                padding: .7em 15px;
                display: block;
            }
            .ui-li-has-thumb .ui-btn-inner a.ui-link-inherit, .ui-li-has-thumb.ui-li-static {
                min-height: 59px;
                padding-left: 100px;
            }
            .ui-li-has-arrow .ui-btn-inner a.ui-link-inherit, .ui-li-has-arrow.ui-li-static {
                padding-right: 40px;
            }
            .ui-listview > .ui-first-child.ui-li, .ui-listview .ui-first-child.ui-btn > .ui-li > .ui-btn-text > .ui-link-inherit {
                -webkit-border-top-right-radius: inherit;
                border-top-right-radius: inherit;
                -webkit-border-top-left-radius: inherit;
                border-top-left-radius: inherit;
            }
            .ui-last-child.ui-li, .ui-last-child.ui-field-contain.ui-li {
                border-bottom-width: 1px;
            }
            a.ui-link-inherit {
                text-decoration: none !important;
            }
            .ui-body-c .ui-link-inherit {
                color: #333;
            }
            .ui-btn-up-j:visited, .ui-btn-up-j a.ui-link-inherit {
                color: #ffffff;
            }
            .ui-btn-up-c:visited, .ui-btn-up-c a.ui-link-inherit {
                color: #2f3e46;
            }
            .ui-li .ui-btn-text a.ui-link-inherit {
                text-overflow: ellipsis;
                overflow: hidden;
                white-space: nowrap;
            }
            .ui-listview > .ui-last-child.ui-li, .ui-listview .ui-last-child.ui-btn > .ui-li > .ui-btn-text > .ui-link-inherit, .ui-collapsible-content > :not(.ui-listview-inset).ui-listview, .ui-collapsible-content > :not(.ui-listview-inset).ui-listview .ui-last-child.ui-li {
                -webkit-border-bottom-right-radius: inherit;
                border-bottom-right-radius: inherit;
                -webkit-border-bottom-left-radius: inherit;
                border-bottom-left-radius: inherit;
            }
            .ui-li > .ui-btn-inner {
                display: block;
                position: relative;
                padding: 0;
            }
            div.ui-btn-text {
                width: auto;
            }
            .ui-icon, .ui-icon-searchfield::after {
                background-color: #666;
                background-color: rgba(0,0,0,.4);
                background-image: url(images/icons-18-white.png);
                background-repeat: no-repeat;
                -webkit-border-radius: 9px;
                border-radius: 9px;
            }
            .ui-icon-arrow-r {
                background-position: -108px -1px;
            }
            .ui-icon-shadow {
                -moz-box-shadow: 0 1px 0 rgba(255, 255, 255, .4);
                -webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, .4);
                box-shadow: 0px 1px 0px rgba(255,255,255,0.4);
            }
            .ui-icon {
                width: 18px;
                height: 18px;
            }
            .ui-btn-icon-right .ui-icon {
                right: 10px;
            }
            .ui-btn-icon-left > .ui-btn-inner > .ui-icon, .ui-btn-icon-right > .ui-btn-inner > .ui-icon {
                position: absolute;
                top: 50%;
                margin-top: -9px;
            }
            img {
                max-width: 100%;
                overflow: hidden;
            }
            .ui-li-thumb, .ui-listview .ui-li-icon {
                position: absolute;
                left: 1px;
                top: 0px;
                max-height: 80px;
                max-width: 80px;
            }
            .ui-li-thumb, .ui-listview .ui-li-icon, .ui-li-content {
                float: left;
                margin-right: 10px;
            }
            .ui-mobile a img, .ui-mobile fieldset {
                border-width: 0;
            }
            .ui-listview > .ui-last-child.ui-li :not(.ui-li-icon).ui-li-thumb {
                -webkit-border-bottom-left-radius: inherit;
                border-bottom-left-radius: inherit;
            }
            .ui-listview > .ui-first-child.ui-li :not(.ui-li-icon).ui-li-thumb {
                -webkit-border-top-left-radius: inherit;
                border-top-left-radius: inherit;
            }
        </style>
        <style>
            .temp-high { color: red; }
            .temp-low { color: lightskyblue;}
            .text-right { text-align: right;}
            .text-large { font-size: 1.2em;}
            li.day-time {
                border: 1px solid #ccc;
                background: #eee;
                font-weight: bold;
                color: #222;
                text-shadow: 0px 1px 0px #fff;
                background-image: -webkit-gradient(linear,left top,left bottom,from( #fff ),to( #f1f1f1 ));
                background-image: -webkit-linear-gradient( #fff,#f1f1f1 );
                background-image: -moz-linear-gradient( #fff,#f1f1f1 );
                background-image: -ms-linear-gradient( #fff,#f1f1f1 );
                background-image: -o-linear-gradient( #fff,#f1f1f1 );
                background-image: linear-gradient( #fff,#f1f1f1 );
            }
            li.night-time {
                border: 1px solid #4d4d4d;
                background: #4d4d4d /*{j-bup-background-color}*/;
                font-weight: bold;
                color: #ffffff;
                text-shadow: 0px 1px 0px #444444;
                background-image: -webkit-gradient(linear, left top, left bottom, from( #545454 /*{j-bup-background-start}*/), to( #454545 /*{j-bup-background-end}*/));
                background-image: -webkit-linear-gradient( #545454, #454545 /*{j-bup-background-end}*/);
                background-image: -moz-linear-gradient( #545454, #454545);
                background-image: -ms-linear-gradient( #545454, #454545);
                background-image: -o-linear-gradient( #545454, #454545 );
                background-image: linear-gradient( #545454, #454545);
            }
        </style>
    </head>
    <body class="ui-mobile-viewport ui-overlay-c">
        <div class="ui-page ui-body-c ui-page-header-fixed ui-page-active" id="text_forecast" style="padding-top: 1em; min-height: 443px;" >
            <div class="ui-content" role="main" data-role="content">
                <div class="pull-right">
                    <img src="<?= Yii::getAlias('@web/images/header_nws.png'); ?>" alt="Forecast from The National Weather Service">
                </div>

                <span id="textforecastdiv">
                    <div><h1>Weather Forecast for <?= strval($data->location->areaDescription); ?></h1>
                        <span class="smallTxt">
                            <?= "<b>Lat:&nbsp;</b> {$data->location->latitude}&deg;&nbsp;"; ?>
                            <?= "<b>Lon:&nbsp;</b> {$data->location->longitude}&deg;&nbsp;"; ?>
                            <?= "<b>Elev:&nbsp;</b> {$data->currentobservation->elev}ft.</span>"; ?>
                    </div>
                    <ul class="ui-listview ui-listview-inset ui-corner-all ui-shadow" data-role="listview" data-inset="true">
                        <li class="ui-li ui-li-has-thumb ui-first-child ui-btn-up-c" data-theme="c" data-iconpos="right" data-icon="arrow-r" data-corners="false" data-shadow="false" data-iconshadow="true" data-wrapperels="div">
                            <div class="panel panel-info" id="current-conditions">

                                <!-- Current Conditions header row -->
                                <div class="panel-heading"><h1 class="panel-title">Current Conditions</h1></div>
                                <div class="panel-body" id="current-conditions-body">
                                    <!-- Graphic and temperatures -->
                                    <div class="pull-left" id="current_conditions-summary">
                                        <img class="pull-left" alt="" src="<?= $_currIconPath . strval($data->currentobservation->Weatherimage); ?>">
                                        <p class="text-large"><?= strval($data->currentobservation->Weather); ?></p>
                                        <span style="font-size: 3em; white-space: normal;"><?= strval($data->currentobservation->Temp); ?>&deg;</span>
                                        <?php
                                        $tempF = floatval($data->currentobservation->Dewp);
                                        if (!is_numeric($data->currentobservation->WindChill)) :
                                            ?>
                                            <p class="text-center">Heat Index:<br><b><?= $nw->getHeatIndexStr(); ?></b></p>
                                        <?php else: ?>
                                            <p class="text-center">Wind Chill:<br><b><?= $nw->getWindChillStr(); ?></b></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="pull-left" id="current_conditions_detail">
                                        <table>
                                            <tbody><tr>
                                                    <td class="text-right"><b>Humidity:&nbsp;</b></td>
                                                    <td><?= strval($data->currentobservation->Relh); ?>&percnt;</td>
                                                </tr>
                                                <tr>
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
                                                    <th class="text-right">Dewpoint:&nbsp;</th>
                                                    <?php
                                                    //$tempF = floatval($data->currentobservation->Dewp);
                                                    $tempC = round($nw->convertF2C($tempF), 1);
                                                    ?>
                                                    <td><?= "{$tempF}&deg; F ({$tempC}&deg; C)" ?></td>
                                                </tr>
                                                <tr>
                                                    <th class="text-right">Visibility:&nbsp;</th>
                                                    <td><?= strval($data->currentobservation->Visibility); ?> mi</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-right">Last Updated:&nbsp;</th>
                                                    <td><?= strval($data->currentobservation->Date); ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /Current Conditions -->
                            </div>
                        </li>
                        <li class="ui-li ui-li-has-thumb ui-btn-up-c">
                            <div class="ui-btn-inner ui-li">
                                <div class="ui-btn-text">
                                    <a class="ui-link-inherit" href="#">
                                        <img class="ui-li-thumb" src="http://forecast.weather.gov/newimages/medium/few.png">
                                        <span style="font-size: 1.2em;">This Afternoon</span>
                                        <br>Sunny<br>
                                        <span style="font-size: 1em; white-space: normal;"> High <span class="temp-high">82&deg;</span>
                                            <br>
                                            <span style="font-size: 1em; font-weight: normal;">Sunny, with a high near 82. North wind around 10 mph.</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="ui-btn ui-btn-icon-right ui-li-has-arrow ui-li ui-li-has-thumb ui-btn-up-j" data-theme="j" data-iconpos="right" data-icon="arrow-r" data-corners="false" data-shadow="false" data-iconshadow="true" data-wrapperels="div">
                            <div class="ui-btn-inner ui-li">
                                <div class="ui-btn-text">
                                    <a class="ui-link-inherit" href="pages/hourlyFcst.php?lat=30.49&amp;lon=-87.21&amp;period=Tonight">
                                        <img class="ui-li-thumb" src="http://forecast.weather.gov/newimages/medium/nfew.png">
                                        <span style="font-size: 1.2em;">Tonight</span>
                                        <br>Mostly Clear<br>
                                        <span style="font-size: 1em; white-space: normal;"> Low <span class="temp-low">62&deg;</span><br>
                                            <span style="font-size: 1em; font-weight: normal;">Mostly clear, with a low around 62. North wind around 10 mph. </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="ui-btn ui-btn-icon-right ui-li-has-arrow ui-li ui-li-has-thumb ui-btn-up-c" data-theme="c" data-iconpos="right" data-icon="arrow-r" data-corners="false" data-shadow="false" data-iconshadow="true" data-wrapperels="div">
                            <div class="ui-btn-inner ui-li">
                                <div class="ui-btn-text">
                                    <a class="ui-link-inherit" href="pages/hourlyFcst.php?lat=30.49&amp;lon=-87.21&amp;period=Friday">
                                        <img class="ui-li-thumb" src="http://forecast.weather.gov/newimages/medium/few.png">
                                        <span style="font-size: 1.2em;">Friday</span>
                                        <br>Sunny<br>
                                        <span style="font-size: 1em; white-space: normal;"> High <font color="#ff0000">85</font>
                                            <br>
                                            <span style="font-size: 1em; font-weight: normal;">Sunny, with a high near 85. Northeast wind around 10 mph. </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="ui-btn ui-btn-icon-right ui-li-has-arrow ui-li ui-li-has-thumb ui-btn-up-j" data-theme="j" data-iconpos="right" data-icon="arrow-r" data-corners="false" data-shadow="false" data-iconshadow="true" data-wrapperels="div">
                            <div class="ui-btn-inner ui-li">
                                <div class="ui-btn-text">
                                    <a class="ui-link-inherit" href="pages/hourlyFcst.php?lat=30.49&amp;lon=-87.21&amp;period=FridayNight">
                                        <img class="ui-li-thumb" src="http://forecast.weather.gov/newimages/medium/nfew.png">
                                        <span style="font-size: 1.2em;">Friday Night</span>
                                        <br>Mostly Clear<br>
                                        <span style="font-size: 1em; white-space: normal;"> Low <font color="#66ccff">66</font>
                                            <br>
                                            <span style="font-size: 1em; font-weight: normal;">Mostly clear, with a low around 66. North wind around 10 mph. </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="ui-btn ui-btn-icon-right ui-li-has-arrow ui-li ui-li-has-thumb ui-btn-up-c" data-theme="c" data-iconpos="right" data-icon="arrow-r" data-corners="false" data-shadow="false" data-iconshadow="true" data-wrapperels="div"><div class="ui-btn-inner ui-li"><div class="ui-btn-text"><a class="ui-link-inherit" href="pages/hourlyFcst.php?lat=30.49&amp;lon=-87.21&amp;period=Saturday"><img class="ui-li-thumb" src="http://forecast.weather.gov/newimages/medium/few.png"><span style="font-size: 1.2em;">Saturday</span><br>Sunny<br><span style="font-size: 1em; white-space: normal;"> High <font color="#ff0000">85</font><br><span style="font-size: 1em; font-weight: normal;">Sunny, with a high near 85. Northeast wind 10 to 15 mph, with gusts as high as 20 mph. </span></span></a></div><span class="ui-icon ui-icon-arrow-r ui-icon-shadow">&nbsp;</span></div></li><li class="ui-btn ui-btn-icon-right ui-li-has-arrow ui-li ui-li-has-thumb ui-btn-up-j" data-theme="j" data-iconpos="right" data-icon="arrow-r" data-corners="false" data-shadow="false" data-iconshadow="true" data-wrapperels="div"><div class="ui-btn-inner ui-li"><div class="ui-btn-text"><a class="ui-link-inherit" href="pages/hourlyFcst.php?lat=30.49&amp;lon=-87.21&amp;period=SaturdayNight"><img class="ui-li-thumb" src="http://forecast.weather.gov/newimages/medium/nfew.png"><span style="font-size: 1.2em;">Saturday Night</span><br>Mostly Clear<br><span style="font-size: 1em; white-space: normal;"> Low <font color="#66ccff">67</font><br><span style="font-size: 1em; font-weight: normal;">Mostly clear, with a low around 67. Northeast wind around 15 mph, with gusts as high as 20 mph. </span></span></a></div><span class="ui-icon ui-icon-arrow-r ui-icon-shadow">&nbsp;</span></div></li><li class="ui-btn ui-btn-up-c ui-btn-icon-right ui-li-has-arrow ui-li ui-li-has-thumb" data-theme="c" data-iconpos="right" data-icon="arrow-r" data-corners="false" data-shadow="false" data-iconshadow="true" data-wrapperels="div"><div class="ui-btn-inner ui-li"><div class="ui-btn-text"><a class="ui-link-inherit" href="pages/hourlyFcst.php?lat=30.49&amp;lon=-87.21&amp;period=Sunday"><img class="ui-li-thumb" src="http://forecast.weather.gov/newimages/medium/few.png"><span style="font-size: 1.2em;">Sunday</span><br>Sunny<br><span style="font-size: 1em; white-space: normal;"> High <font color="#ff0000">83</font><br><span style="font-size: 1em; font-weight: normal;">Sunny, with a high near 83. Northeast wind around 15 mph, with gusts as high as 20 mph. </span></span></a></div><span class="ui-icon ui-icon-arrow-r ui-icon-shadow">&nbsp;</span></div></li><li class="ui-btn ui-btn-up-j ui-btn-icon-right ui-li-has-arrow ui-li ui-li-has-thumb" data-theme="j" data-iconpos="right" data-icon="arrow-r" data-corners="false" data-shadow="false" data-iconshadow="true" data-wrapperels="div"><div class="ui-btn-inner ui-li"><div class="ui-btn-text"><a class="ui-link-inherit" href="pages/hourlyFcst.php?lat=30.49&amp;lon=-87.21&amp;period=SundayNight"><img class="ui-li-thumb" src="http://forecast.weather.gov/newimages/medium/nsct.png"><span style="font-size: 1.2em;">Sunday Night</span><br>Partly Cloudy<br><span style="font-size: 1em; white-space: normal;"> Low <font color="#66ccff">66</font><br><span style="font-size: 1em; font-weight: normal;">Partly cloudy, with a low around 66. Northeast wind around 15 mph, with gusts as high as 20 mph. </span></span></a></div><span class="ui-icon ui-icon-arrow-r ui-icon-shadow">&nbsp;</span></div></li><li class="ui-btn ui-btn-up-c ui-btn-icon-right ui-li-has-arrow ui-li ui-li-has-thumb" data-theme="c" data-iconpos="right" data-icon="arrow-r" data-corners="false" data-shadow="false" data-iconshadow="true" data-wrapperels="div"><div class="ui-btn-inner ui-li"><div class="ui-btn-text"><a class="ui-link-inherit" href="pages/hourlyFcst.php?lat=30.49&amp;lon=-87.21&amp;period=Monday"><img class="ui-li-thumb" src="http://forecast.weather.gov/newimages/medium/sct.png"><span style="font-size: 1.2em;">Monday</span><br>Mostly Sunny<br><span style="font-size: 1em; white-space: normal;"> High <font color="#ff0000">84</font><br><span style="font-size: 1em; font-weight: normal;">Mostly sunny, with a high near 84. North wind around 15 mph, with gusts as high as 20 mph. </span></span></a></div><span class="ui-icon ui-icon-arrow-r ui-icon-shadow">&nbsp;</span></div></li><li class="ui-btn ui-btn-up-j ui-btn-icon-right ui-li-has-arrow ui-li ui-li-has-thumb" data-theme="j" data-iconpos="right" data-icon="arrow-r" data-corners="false" data-shadow="false" data-iconshadow="true" data-wrapperels="div"><div class="ui-btn-inner ui-li"><div class="ui-btn-text"><a class="ui-link-inherit" href="pages/hourlyFcst.php?lat=30.49&amp;lon=-87.21&amp;period=MondayNight"><img class="ui-li-thumb" src="http://forecast.weather.gov/newimages/medium/nfew.png"><span style="font-size: 1.2em;">Monday Night</span><br>Mostly Clear<br><span style="font-size: 1em; white-space: normal;"> Low <font color="#66ccff">65</font><br><span style="font-size: 1em; font-weight: normal;">Mostly clear, with a low around 65.</span></span></a></div><span class="ui-icon ui-icon-arrow-r ui-icon-shadow">&nbsp;</span></div></li><li class="ui-btn ui-btn-up-c ui-btn-icon-right ui-li-has-arrow ui-li ui-li-has-thumb" data-theme="c" data-iconpos="right" data-icon="arrow-r" data-corners="false" data-shadow="false" data-iconshadow="true" data-wrapperels="div"><div class="ui-btn-inner ui-li"><div class="ui-btn-text"><a class="ui-link-inherit" href="pages/hourlyFcst.php?lat=30.49&amp;lon=-87.21&amp;period=Tuesday"><img class="ui-li-thumb" src="http://forecast.weather.gov/newimages/medium/few.png"><span style="font-size: 1.2em;">Tuesday</span><br>Sunny<br><span style="font-size: 1em; white-space: normal;"> High <font color="#ff0000">84</font><br><span style="font-size: 1em; font-weight: normal;">Sunny, with a high near 84.</span></span></a></div><span class="ui-icon ui-icon-arrow-r ui-icon-shadow">&nbsp;</span></div></li><li class="ui-btn ui-btn-up-j ui-btn-icon-right ui-li-has-arrow ui-li ui-li-has-thumb" data-theme="j" data-iconpos="right" data-icon="arrow-r" data-corners="false" data-shadow="false" data-iconshadow="true" data-wrapperels="div"><div class="ui-btn-inner ui-li"><div class="ui-btn-text"><a class="ui-link-inherit" href="pages/hourlyFcst.php?lat=30.49&amp;lon=-87.21&amp;period=TuesdayNight"><img class="ui-li-thumb" src="http://forecast.weather.gov/newimages/medium/nfew.png"><span style="font-size: 1.2em;">Tuesday Night</span><br>Mostly Clear<br><span style="font-size: 1em; white-space: normal;"> Low <font color="#66ccff">65</font><br><span style="font-size: 1em; font-weight: normal;">Mostly clear, with a low around 65.</span></span></a></div><span class="ui-icon ui-icon-arrow-r ui-icon-shadow">&nbsp;</span></div></li><li class="ui-btn ui-btn-up-c ui-btn-icon-right ui-li-has-arrow ui-li ui-li-has-thumb ui-last-child" data-theme="c" data-iconpos="right" data-icon="arrow-r" data-corners="false" data-shadow="false" data-iconshadow="true" data-wrapperels="div"><div class="ui-btn-inner ui-li"><div class="ui-btn-text"><a class="ui-link-inherit" href="pages/hourlyFcst.php?lat=30.49&amp;lon=-87.21&amp;period=Wednesday"><img class="ui-li-thumb" src="http://forecast.weather.gov/newimages/medium/few.png"><span style="font-size: 1.2em;">Wednesday</span><br>Sunny<br><span style="font-size: 1em; white-space: normal;"> High <font color="#ff0000">86</font><br><span style="font-size: 1em; font-weight: normal;">Sunny, with a high near 86.</span></span></a></div><span class="ui-icon ui-icon-arrow-r ui-icon-shadow">&nbsp;</span></div></li></ul></span>
            </div>
        </div>
    </body>
</html>
