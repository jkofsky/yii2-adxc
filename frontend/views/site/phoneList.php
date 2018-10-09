<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Phone List';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-phone-list">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>REV. <?= date('m.d.y', filemtime(__FILE__)); ?></p>

    <table class="table table-condensed table-striped">
        <thead>
            <tr><th style="width:50%">Location</th>                     <th style="width:25%">Number</th>      <th style="width:25%">Room</th></tr>
        </thead>
        <tbody>
            <tr><td>Main Office FAX</td>                                <td>850-494-0778</td>   <td>Reception Desk</td></tr>
            <tr><td>e-Fax Dave</td>                                     <td>850-378-1030</td>   <td>Home</td></tr>
            <tr><td>1330 WEBY Milton Office</td>                        <td>850-983-2242</td>   <td>Milton, FL</td></tr>
            <tr class="success"><td>WNRP Studio/Listener Line</td>      <td>850-437-1620</td>   <td>WNRP Studio</td></tr>
            <tr class="success"><td>WYCT Studio/Listener Line</td>      <td>850-430-1987</td>   <td>WYCT Studio</td></tr>
            <tr class="success"><td>ESPN Studio/Listener Line</td>      <td>850-623-1330</td>   <td>ESPN (W233CM) Studio</td></tr>
            <tr class="success"><td>WEBY Studio/Listener Line</td>      <td>850-623-1330</td>   <td>WEBY Studio</td></tr>
            <tr class="warning"><td>WNRP (confidential)</td>            <td>850-262-6###</td>   <td>WNRP Studio</td></tr>
            <tr class="warning"><td>WYCT (confidential)</td>            <td>850-262-6###</td>   <td>WYCT Studio</td></tr>
            <tr class="warning"><td>ESPN (confidential)</td>            <td>850-262-6###</td>   <td>ESPN (W233CM) Studio</td></tr>
            <tr class="warning"><td>WEBY (confidential)</td>            <td>850-262-6088</td>   <td>WEBY Studio</td></tr>
            <tr class="danger"><td>FM Tower (HotLine)</td>              <td>251-931-3302</td>   <td>Bunker</td></tr>
        </tbody>
    </table>

    <p class="text-danger">All 3 digit extensions can be direct dialed using prefix - (850) 262-6### (### = Extension)</p>
    <table class="table table-condensed table-striped">
        <thead>
            <tr><th style="width:50%">Location</th>                     <th style="width:25%">Extension</th>      <th style="width:25%">Room</th></tr>
        </thead>
        <tbody>
            <tr><td>Front Desk <i>(can also dial 0 within building)</i></td>   <td>100</td>            <td>102</td></tr>
            <tr><td>Front Door Access</td>                              <td>108</td>            <td>Outside</td></tr>
            <tr><td>Conference Room (Speaker Ph.)</td>                  <td>???</td>            <td>202</td></tr>
            <tr><td>Conference Room (Digital)</td>                      <td>141</td>            <td>122</td></tr>
            <tr><td>Conference Room</td>                                <td>150</td>            <td>122</td></tr>
            <tr><td>Conference Room</td>                                <td>151</td>            <td>122</td></tr>
            <tr><td>Briton's Office</td>                                <td>129</td>            <td>120</td></tr>
            <tr><td>Lyle's Office</td>                                  <td>149</td>            <td>125</td></tr>
            <tr><td>Engineering TOC</td>                                <td>143</td>            <td>124</td></tr>
            <tr><td>Engineering Satellite Rack (TOC)</td>               <td>159</td>            <td>124</td></tr>
            <tr><td>Promotions Office</td>                              <td>104</td>            <td>121</td></tr>
            <tr><td>Traffic Department</td>                             <td>117</td>            <td>152A</td></tr>
            <tr><td>3<sup>rd</sup> Floor Warehouse</td>                 <td>135</td>            <td>221</td></tr>
            <tr class="danger"><td>WNRP On-Air (Telos)</td>             <td>132</td>            <td>109</td></tr>
            <tr><td>WNRP Studio - Talent</td>                           <td>125</td>            <td>109</td></tr>
            <tr><td>WNRP Studio - Board Op</td>                         <td>131</td>            <td>109</td></tr>
            <tr class="danger"><td>WYCT On-Air (Telos)</td>             <td>???</td>            <td>106</td></tr>
            <tr><td>WYCT Studio (Talent)</td>                           <td>???</td>            <td>106</td></tr>
            <tr><td>WYCT Studio (Board Op)</td>                         <td>???</td>            <td>106</td></tr>
            <tr class="danger"><td>WYCT-HD2 On-Air (Telos)</td>         <td>???</td>            <td>213</td></tr>
            <tr><td>WYCT-HD2 Studio (Talent)</td>                       <td>???</td>            <td>213</td></tr>
            <tr><td>WYCT-HD2 Studio (Board Op)</td>                     <td>???</td>            <td>213</td></tr>
            <tr class="danger"><td>WEBY On-Air (Telos)</td>             <td>116</td>            <td>208</td></tr>
            <tr><td>WEBY Studio (Talent)</td>                           <td>114</td>            <td>208</td></tr>
            <tr><td>WEBY Studio (Board Op)</td>                         <td>138</td>            <td>208</td></tr>
            <tr><td>Newsroom Desk 1 (News Tip-Line)</td>                <td>119</td>            <td>107</td></tr>
            <tr><td>Newsroom Desk 1 (On-Air)</td>                       <td>133</td>            <td>107</td></tr>
            <tr><td>Newsroom Desk 2</td>                                <td>121</td>            <td>107</td></tr>
            <tr><td>Newsroom Desk 3</td>                                <td>???</td>            <td>107</td></tr>
            <tr><td>Newsroom Desk 4</td>                                <td>142</td>            <td>107</td></tr>
            <tr><td>Newsroom (Traffic Tip-Line)</td>                    <td>111</td>            <td>107</td></tr>
            <tr><td>Production Wedge</td>                               <td>130</td>            <td>207</td></tr>
            <tr><td>Production Room</td>                                <td>116</td>            <td>206</td></tr>
            <tr><td>Production Room (Hybrid)</td>                       <td>109</td>            <td>206</td></tr>
            <tr><td>Production Assistant (Loft)</td>                    <td>136</td>            <td>216</td></tr>
            <tr><td>Production Studio</td>                              <td>105</td>            <td>119</td></tr>
        </tbody>
    </table>
</div>
