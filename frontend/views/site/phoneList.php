<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Phone List';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-phone-list">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>REV. <?= date('m.d.y', filemtime(__FILE__)); ?></p>
    <p class="text-danger">All 3 digit extensions can be direct dialed using prefix - (850) 262-6 + Extension</p>
    <table class="table table-condensed table-striped">
        <thead>
            <tr><th>Location</th>                                       <th>Extension</th>      <th>Room</th></tr>
        </thead>
        <tbody>
            <tr><td>Front Desk - can also dial 0</td>                   <td>100</td>       <td>102</td></tr>
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
            <tr><td>3rd Floor Warehouse</td>                            <td>135</td>            <td>221</td></tr>
            <tr class="danger"><td>CatCountry 98&bullet;7 On-Air (Telos)</td> <td>???</td>      <td>106</td></tr>
            <tr><td>CatCountry 98&bullet;7 Studio (Talent)</td>         <td>???</td>            <td>106</td></tr>
            <tr><td>CatCountry 98&bullet;7 Studio (Board Op)</td>       <td>???</td>            <td>106</td></tr>
            <tr class="danger"><td>NewsRadio 1620 On-Air (Telos)</td>   <td>132</td>            <td>109</td></tr>
            <tr><td>NewsRadio 1620 Studio - Talent</td>                 <td>125</td>            <td>109</td></tr>
            <tr><td>NewsRadio 1620 Studio - Board Op</td>               <td>131</td>            <td>109</td></tr>
            <tr class="danger"><td>1330 WEBY On-Air (Telos)</td>        <td>116</td>            <td>208</td></tr>
            <tr><td>1330 WEBY Studio (Talent)</td>                      <td>114</td>            <td>208</td></tr>
            <tr><td>1330 WEBY Studio (Board Op)</td>                    <td>138</td>            <td>208</td></tr>
            <tr><td>Newsroom Desk 1 (News Tip-Line)</td>                <td>119</td>            <td>107</td></tr>
            <tr><td>Newsroom Desk 1 On-Air</td>                         <td>133</td>            <td>107</td></tr>
            <tr><td>Newsroom Desk 2 On-Air</td>                         <td>120</td>            <td>107</td></tr>
            <tr><td>Newsroom Desk 3</td>                                <td>???</td>            <td>107</td></tr>
            <tr><td>Newsroom Desk 4 (Traffic)</td>                      <td>142</td>            <td>107</td></tr>
            <tr><td>Newsroom (Traffic Tip-Line)</td>                    <td>111</td>            <td>107</td></tr>
            <tr><td>Production Studio (Wedge)</td>                      <td>130</td>            <td>207</td></tr>
            <tr><td>Production Room</td>                                <td>116</td>            <td>206</td></tr>
            <tr><td>Production Rooom (Hybrid)</td>                      <td>109</td>            <td>206</td></tr>
            <tr><td>Production Assistant (Loft)</td>                    <td>136</td>            <td>216</td></tr>
            <tr><td>HD-2 Studio</td>                                    <td>105</td>            <td>119</td></tr>

            <tr><td>Main Office FAX</td>                                <td>850-494-0778</td>   <td>146</td></tr>
            <tr class="info"><td>CatCountry 98.7 Listener Line</td>     <td>850-430-1987</td>   <td>FM Studio</td></tr>
            <tr class="info"><td>NewsRadio 1620 Listener Line</td>      <td>850-437-1620</td>   <td>AM Studio</td></tr>
            <tr class="info"><td>1330 WEBY Listener Line</td>           <td>850-623-1330</td>   <td>WEBY Studio</td></tr>
            <tr class="danger"><td>e-Fax Dave</td>                      <td>850-378-1030</td>   <td></td></tr>
            <tr class="danger"><td>FM Tower (confidential)</td>         <td>251-931-3302</td>   <td>Bunker</td></tr>
            <tr class="info"><td>1330 WEBY Milton Office</td>           <td>850-983-2242</td>   <td>Milton, FL</td></tr>
        </tbody>
    </table>
</div>
