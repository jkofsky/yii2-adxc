<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html class=" js flexbox no-flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg no-smil svgclippaths">
    <head>
        <title></title>
        <style>
            * {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }
            article, aside, details, figcaption, figure, footer, header, hgroup, main, nav, section, summary {
                display: block;
            }
            body {
                margin: 0;
            }
            html {
                font-family: sans-serif;
                -webkit-text-size-adjust: 100%;
                -ms-text-size-adjust: 100%;
            }
            a {
                background: 0 0;
            }
            b, strong {
                font-weight: 700;
            }
            table {
                border-spacing: 0;
                border-collapse: collapse;
            }
            td, th {
                padding: 0;
            }
            img {
                border: 0;
            }
            ::before, ::after {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }
            .panel {
                margin-bottom: 20px;
                background-color: #fff;
                border: 1px solid transparent;
                border-radius: 4px;
                -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
                box-shadow: 0px 1px 1px rgba(0,0,0,0.05);
            }
            .panel-default {
                border-color: #ddd;
            }
            .panel {
                -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
                box-shadow: 0px 1px 2px rgba(0,0,0,0.05);
            }
            .panel {
                margin-bottom: 10px;
            }
            .contentArea {
                padding: 0 1em;
            }
            main {
                background-color: #fff;
                -webkit-box-shadow: 0 0 5px 1px #333333;
                box-shadow: 0px 0px 5px 1px #333333;
                min-width: 320px;
            }
            .container {
                padding-right: 15px;
                padding-left: 15px;
                margin-right: auto;
                margin-left: auto;
            }
            /* @media all and (min-width:768px) */
            .container {
                width: 750px;
            }
            /* @media all and (min-width:992px) */
            .container {
                width: 970px;
            }
            /* @media all and (min-width:1200px) */
            .container {
                width: 1170px;
            }
            .container {
                padding: 0px;
            }
            .panel-body {
                padding: 10px;
            }
            .clearfix::before, .clearfix::after, .dl-horizontal dd::before, .dl-horizontal dd::after, .container::before, .container::after, .container-fluid::before, .container-fluid::after, .row::before, .row::after, .form-horizontal .form-group::before, .form-horizontal .form-group::after, .btn-toolbar::before, .btn-toolbar::after, .btn-group-vertical > .btn-group::before, .btn-group-vertical > .btn-group::after, .nav::before, .nav::after, .navbar::before, .navbar::after, .navbar-header::before, .navbar-header::after, .navbar-collapse::before, .navbar-collapse::after, .pager::before, .pager::after, .panel-body::before, .panel-body::after, .modal-footer::before, .modal-footer::after {
                display: table;
                content: " ";
            }
            .clearfix::after, .dl-horizontal dd::after, .container::after, .container-fluid::after, .row::after, .form-horizontal .form-group::after, .btn-toolbar::after, .btn-group-vertical > .btn-group::after, .nav::after, .navbar::after, .navbar-header::after, .navbar-collapse::after, .pager::after, .panel-body::after, .modal-footer::after {
                clear: both;
            }
            main.container {
                margin-top: -10px !important;
            }
            body {
                font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
                font-size: 14px;
                line-height: 1.4285;
                color: #333;
                background-color: #fff;
            }
            body {
                background-color: #c5e5f5;
                font-size: 12px;
            }
            html {
                font-size: 10px;
                -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            }
            .panel-heading {
                padding: 10px 15px;
                border-bottom: 1px solid transparent;
                border-top-left-radius: 3px;
                border-top-right-radius: 3px;
            }
            .panel-heading {
                padding: 10px;
            }
            .panel-default > .panel-heading {
                color: #333;
                background-color: #f5f5f5;
                border-color: #ddd;
            }
            .panel-default > .panel-heading {
                background-image: -webkit-linear-gradient(top,#f5f5f5 0,#e8e8e8 100%);
                background-image: -o-linear-gradient(top,#f5f5f5 0,#e8e8e8 100%);
                background-image: -webkit-gradient(linear,left top,left bottom,from(#f5f5f5),to(#e8e8e8));
                background-image: linear-gradient(to bottom,#f5f5f5 0,#e8e8e8 100%);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff5f5f5', endColorstr='#ffe8e8e8', GradientType=0);
                background-repeat: repeat-x;
            }
            .panel-body {
                padding: 15px;
            }
            #current-conditions-body {
                overflow: hidden;
            }
            #current-conditions-body {
                font-size: 12px;
            }
            img {
                vertical-align: middle;
            }
            .pull-left {
                float: left !important;
            }
            .pull-left {
                float: left;
            }
            #current_conditions-summary {
                margin-bottom: 10px;
                width: 245px;
            }
            #current_conditions_detail {
                width: 30%;
            }
            #current_conditions_station {
                text-align: left;
                width: 25%;
                float: right;
            }
            .current-conditions-extra {
                width: 100%;
                text-align: left;
                margin-bottom: 0.5em;
            }
            p {
                margin: 0 0 10px;
            }
            .current-conditions-extra p {
                margin-bottom: 0px;
            }
            a {
                color: #428bca;
                text-decoration: none;
            }
            a {
                text-decoration: underline;
            }
            .current-conditions-extra p a {
                display: block;
                white-space: nowrap;
            }
            a[href]::after {
                content: none;
            }
            .current-conditions-extra p a:first-of-type {
                padding-left: 0px;
                border-left: none;
            }
            .current-conditions-extra p a:last-of-type {
                padding-right: 0px;
            }
            table {
                background-color: transparent;
            }
            #current_conditions_detail table {
                width: 100%;
            }
            .text-right {
                text-align: right;
            }
            #current_conditions_detail table tr td:first-of-type {
                padding-right: 0.5em;
            }
            #current_conditions-summary img {
                width: 100px;
                height: 100px;
                margin-right: 1em;
            }
            #current_conditions-summary p {
                margin: 0;
            }
            #current_conditions-summary p.myforecast-current {
                font-size: 14px;
            }
            #current_conditions-summary p.myforecast-current-lrg {
                font-size: 42px;
                font-weight: bold;
                line-height: 40px;
            }
            #current_conditions-summary p.myforecast-current-sm {
                font-size: 21px;
                line-height: 20px;
            }
            h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
                font-family: inherit;
                font-weight: 500;
                line-height: 1.1;
                color: inherit;
            }
            h1, .h1, h2, .h2, h3, .h3 {
                margin-top: 20px;
                margin-bottom: 10px;
            }
            h2, .h2 {
                font-size: 30px;
            }
            h2 {
                font-size: 16px;
                font-weight: bold;
            }
            .panel-title {
                margin-top: 0px;
                margin-bottom: 0px;
                font-size: 16px;
                color: inherit;
            }
            .panel-title {
                color: #135897;
            }
            #current-conditions span.smallTxt {
                font-size: 11px;
            }
            #current-conditions span.smallTxt b {
                padding-left: 8px;
            }
            #current-conditions span.smallTxt b:first-of-type {
                padding-left: 0px;
            }
        </style>
    </head>
    <body>
        <main class="container">
            <div class="contentArea">
                <div class="panel panel-default" id="current-conditions">

                    <!-- Current Conditions header row -->
                    <div class="panel-heading">
                        <div>
                            <b>Current conditions at</b>
                            <h2 class="panel-title">Pensacola - Pensacola International Airport (KPNS)</h2>
                            <span class="smallTxt"><b>Lat:&nbsp;</b>30.48°N<b>Lon:&nbsp;</b>87.19°W<b>Elev:&nbsp;</b>118ft.</span>
                        </div>
                    </div>
                    <div class="panel-body" id="current-conditions-body">
                        <!-- Graphic and temperatures -->
                        <div class="pull-left" id="current_conditions-summary">
                            <img class="pull-left" alt="" src="newimages/large/sct.png">
                            <p class="myforecast-current">Fair</p>
                            <p class="myforecast-current-lrg">79°F</p>
                            <p class="myforecast-current-sm">26°C</p>
                        </div>
                        <div class="pull-left" id="current_conditions_detail">
                            <table>
                                <tbody><tr>
                                        <td class="text-right"><b>Humidity</b></td>
                                        <td>36%</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><b>Wind Speed</b></td>
                                        <td>N 9 mph</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><b>Barometer</b></td>
                                        <td>30.10 in (1019.2 mb)</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><b>Dewpoint</b></td>
                                        <td>50°F (10°C)</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><b>Visibility</b></td>
                                        <td>10.00 mi</td>
                                    </tr>
                                    <tr><td class="text-right"><b>Heat Index</b></td><td>79°F (26°C)</td></tr>            <tr>
                                        <td class="text-right"><b>Last update</b></td>
                                        <td>
                                            7 Sep 11:53 am CDT            </td>
                                    </tr>
                                </tbody></table>
                        </div>
                        <div id="current_conditions_station">
                            <div class="current-conditions-extra">
                                <!-- Right hand section -->
                                <p class="moreInfo"><b>More Information:</b></p><p><a title="Mobile, AL" id="localWFO" href="http://www.srh.noaa.gov/mob"><span class="hideText">Local</span> Forecast Office</a><a id="moreWx" href="obslocal.php?warnzone=FLZ202&amp;local_place=Pensacola Regional Airport FL&amp;zoneid=CDT&amp;offset=18000">More Local Wx</a><a id="3dayHist" href="http://www.weather.gov/data/obhistory/KPNS.html">3 Day History</a><a id="mobileWxLink" href="http://mobile.weather.gov/index.php?lat=30.4907&amp;lon=-87.206&amp;unit=0&amp;lg=english">Mobile Weather</a><a id="wxGraph" href="MapClick.php?lat=30.4907&amp;lon=-87.206&amp;unit=0&amp;lg=english&amp;FcstType=graphical">Hourly <span class="hideText">Weather </span>Forecast</a></p>		    </div>
                            <!-- /current_conditions_station -->
                        </div>
                        <!-- /current-conditions-body -->
                    </div>
                    <!-- /Current Conditions -->
                </div>
                <!-- 7-Day Forecast -->
                <div class="panel panel-default" id="seven-day-forecast">
                    <div class="panel-heading">
                        <b>Extended Forecast for</b>
                        <h2 class="panel-title">Pensacola Regional Airport FL</h2>
                    </div>
                    <div class="panel-body" id="seven-day-forecast-body">
                        <div id="seven-day-forecast-container"><ul class="list-unstyled" id="seven-day-forecast-list"><li class="forecast-tombstone">
                                    <div class="tombstone-container">
                                        <p class="period-name">This<br>Afternoon</p>
                                        <p><img title="This Afternoon: Sunny, with a high near 82. Northeast wind around 10 mph. " class="forecast-icon" alt="This Afternoon: Sunny, with a high near 82. Northeast wind around 10 mph. " src="newimages/medium/few.png"></p><p class="short-desc" style="height: 54px;">Sunny</p><p class="temp temp-high">High: 82 °F</p></div></li><li class="forecast-tombstone">
                                    <div class="tombstone-container">
                                        <p class="period-name">Tonight<br><br></p>
                                        <p><img title="Tonight: Mostly clear, with a low around 62. North wind around 10 mph. " class="forecast-icon" alt="Tonight: Mostly clear, with a low around 62. North wind around 10 mph. " src="newimages/medium/nfew.png"></p><p class="short-desc" style="height: 54px;">Mostly Clear</p><p class="temp temp-low">Low: 62 °F</p></div></li><li class="forecast-tombstone">
                                    <div class="tombstone-container">
                                        <p class="period-name">Friday<br><br></p>
                                        <p><img title="Friday: Sunny, with a high near 85. Northeast wind around 10 mph. " class="forecast-icon" alt="Friday: Sunny, with a high near 85. Northeast wind around 10 mph. " src="newimages/medium/few.png"></p><p class="short-desc" style="height: 54px;">Sunny</p><p class="temp temp-high">High: 85 °F</p></div></li><li class="forecast-tombstone">
                                    <div class="tombstone-container">
                                        <p class="period-name">Friday<br>Night</p>
                                        <p><img title="Friday Night: Mostly clear, with a low around 66. North wind around 10 mph. " class="forecast-icon" alt="Friday Night: Mostly clear, with a low around 66. North wind around 10 mph. " src="newimages/medium/nfew.png"></p><p class="short-desc" style="height: 54px;">Mostly Clear</p><p class="temp temp-low">Low: 66 °F</p></div></li><li class="forecast-tombstone">
                                    <div class="tombstone-container">
                                        <p class="period-name">Saturday<br><br></p>
                                        <p><img title="Saturday: Sunny, with a high near 85. Northeast wind 10 to 15 mph, with gusts as high as 20 mph. " class="forecast-icon" alt="Saturday: Sunny, with a high near 85. Northeast wind 10 to 15 mph, with gusts as high as 20 mph. " src="newimages/medium/few.png"></p><p class="short-desc" style="height: 54px;">Sunny</p><p class="temp temp-high">High: 85 °F</p></div></li><li class="forecast-tombstone">
                                    <div class="tombstone-container">
                                        <p class="period-name">Saturday<br>Night</p>
                                        <p><img title="Saturday Night: Mostly clear, with a low around 67. Northeast wind around 15 mph, with gusts as high as 20 mph. " class="forecast-icon" alt="Saturday Night: Mostly clear, with a low around 67. Northeast wind around 15 mph, with gusts as high as 20 mph. " src="newimages/medium/nfew.png"></p><p class="short-desc" style="height: 54px;">Mostly Clear</p><p class="temp temp-low">Low: 67 °F</p></div></li><li class="forecast-tombstone">
                                    <div class="tombstone-container">
                                        <p class="period-name">Sunday<br><br></p>
                                        <p><img title="Sunday: Sunny, with a high near 83. Northeast wind around 15 mph, with gusts as high as 20 mph. " class="forecast-icon" alt="Sunday: Sunny, with a high near 83. Northeast wind around 15 mph, with gusts as high as 20 mph. " src="newimages/medium/few.png"></p><p class="short-desc" style="height: 54px;">Sunny</p><p class="temp temp-high">High: 83 °F</p></div></li><li class="forecast-tombstone">
                                    <div class="tombstone-container">
                                        <p class="period-name">Sunday<br>Night</p>
                                        <p><img title="Sunday Night: Partly cloudy, with a low around 66. Northeast wind around 15 mph, with gusts as high as 20 mph. " class="forecast-icon" alt="Sunday Night: Partly cloudy, with a low around 66. Northeast wind around 15 mph, with gusts as high as 20 mph. " src="newimages/medium/nsct.png"></p><p class="short-desc" style="height: 54px;">Partly Cloudy</p><p class="temp temp-low">Low: 66 °F</p></div></li><li class="forecast-tombstone">
                                    <div class="tombstone-container">
                                        <p class="period-name">Monday<br><br></p>
                                        <p><img title="Monday: Mostly sunny, with a high near 84. North wind around 15 mph, with gusts as high as 20 mph. " class="forecast-icon" alt="Monday: Mostly sunny, with a high near 84. North wind around 15 mph, with gusts as high as 20 mph. " src="newimages/medium/sct.png"></p><p class="short-desc" style="height: 54px;">Mostly Sunny</p><p class="temp temp-high">High: 84 °F</p></div></li></ul></div>
                        <script type="text/javascript">
                        // equalize forecast heights
                            $(function () {
                                var maxh = 0;
                                $(".forecast-tombstone .short-desc").each(function () {
                                    var h = $(this).height();
                                    if (h > maxh) {
                                        maxh = h;
                                    }
                                });
                                $(".forecast-tombstone .short-desc").height(maxh);
                            });
                        </script>	</div>
                </div>            </div>
        </main>
    </body>
</html>
