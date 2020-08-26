<?php
/* @var $this yii\web\View */

use yii\bootstrap4\Html;

$this->title = 'Phone List';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="site-phone-list">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Current as of: <?= date('d-M-Y h:ia T', filemtime(__FILE__)); ?></p>

    <div class="card-columns d-print-none">
        <div class="card shadow">
            <div class="card-body table-success">For the General Public.</div>
        </div>
        <div class="card shadow">
            <div class="card-body table-warning">NOT for General Public.</div>
        </div>
        <div class="card shadow">
            <div class="card-body table-danger">For Employees ONLY!</div>
        </div>
    </div>

    <table class="table table-striped table-sm">
        <thead>
            <tr><th style="width:50%">Purpose</th>                     <th style="width:25%">Number</th>      <th style="width:25%">Location</th></tr>
        </thead>
        <tbody>
            <tr><td>Main Office FAX</td>                                        <td>850-494-0778</td>   <td>Reception Desk</td></tr>
            <tr><td>e-Fax Dave</td>                                             <td>850-378-1030</td>   <td>Home</td></tr>
            <tr><td>1330 WEBY Milton Office</td>                                <td>850-983-2242</td>   <td>Milton, FL</td></tr>
            <tr class="table-success"><td>WYCT Studio Listener Line</td>        <td>850-430-1987</td>   <td>Studio 1</td></tr>
            <tr class="table-success"><td>WNRP Studio Listener Line</td>        <td>850-437-1620</td>   <td>Studio 2</td></tr>
            <tr class="table-success"><td>Studio 3 Listener Line</td>           <td>850-262-6064</td>   <td>Studio 3</td></tr>
            <tr class="table-success"><td>WEBY/ESPN Studio Listener Line</td>   <td>850-623-1330</td>   <td>Studio 4</td></tr>
            <tr class="table-warning"><td>WYCT VIP Call-in Line</td>            <td>850-262-6089</td>   <td>Studio 1</td></tr>
            <tr class="table-warning"><td>WNRP VIP Call-in Line</td>            <td>850-262-6088</td>   <td>Studio 2</td></tr>
            <tr class="table-warning"><td>Studio 3 VIP Call-in Line</td>        <td>850-262-6091</td>   <td>Studio 3</td></tr>
            <tr class="table-warning"><td>WEBY/ESPN VIP Call-in Line</td>       <td>850-262-6090</td>   <td>Studio 4</td></tr>
            <tr class="table-danger"><td>WYCT Studio HotLine</td>               <td>850-262-6###</td>   <td>Studio 1</td></tr>
            <tr class="table-danger"><td>WNRP Studio HotLine</td>               <td>850-262-6132</td>   <td>Studio 2</td></tr>
            <tr class="table-danger"><td>Studio 3 HotLine</td>                  <td>850-262-6###</td>   <td>Studio 3</td></tr>
            <tr class="table-danger"><td>WEBY/ESPN Studio HotLine</td>          <td>850-262-6###</td>   <td>Studio 4</td></tr>
            <tr class="table-danger"><td>WYCT-TX (HotLine)</td>                <td>251-931-3302</td>   <td>Bunker</td></tr>
        </tbody>
    </table>

    <p class="text-danger">All 3 digit extensions can be direct dialed using prefix - (850) 262-6-<i>Extension</i></p>
    <table class="table table-striped table-sm">
        <thead>
            <tr><th style="width:50%">Location</th>                    <th style="width:25%">Extension</th>      <th style="width:25%">Room</th></tr>
        </thead>
        <tbody>
            <tr><td>Front Desk <i>(or 0 within building)</i></td>      <td>100</td>            <td>102</td></tr>
            <tr><td>Front Door Access</td>                             <td>108</td>            <td>Outside</td></tr>
            <tr><td>Conference Room (Speaker Ph.)</td>                 <td>???</td>            <td>202</td></tr>
            <tr><td>Conference Room (Digital)</td>                     <td>141</td>            <td>122</td></tr>
            <tr><td>Conference Room</td>                               <td>150</td>            <td>122</td></tr>
            <tr><td>Conference Room</td>                               <td>151</td>            <td>122</td></tr>
            <tr><td>Briton's Office</td>                               <td>129</td>            <td>120</td></tr>
            <tr><td>Lyle's Office</td>                                 <td>149</td>            <td>125</td></tr>
            <tr><td>Engineering TOC</td>                               <td>143</td>            <td>124</td></tr>
            <tr><td>Engineering Satellite Rack (TOC)</td>              <td>159</td>            <td>124</td></tr>
            <tr><td>Promotions Office</td>                             <td>104</td>            <td>121</td></tr>
            <tr><td>Traffic &amp; Continuity (WYCT/WNRP)</td>          <td>117</td>            <td>152</td></tr>
            <tr><td>Traffic &amp; Continuity (WEBY/ESPN)</td>          <td>115</td>            <td>151</td></tr>
            <tr><td>3<sup>rd</sup> Floor Warehouse</td>                <td>135</td>            <td>221</td></tr>
            <tr><td>Studio 1 (WYCT) - Talent</td>                      <td>???</td>            <td>106</td></tr>
            <tr><td>Studio 1 (WYCT) - Board Op</td>                    <td>???</td>            <td>106</td></tr>
            <tr><td>Studio 2 (WNRP) - Talent</td>                      <td>125</td>            <td>109</td></tr>
            <tr><td>Studio 2 (WNRP) - Board Op</td>                    <td>131</td>            <td>109</td></tr>
            <tr><td>Studio 3 - Talent</td>                             <td>114</td>            <td>208</td></tr>
            <tr><td>Studio 3 - Board Op</td>                           <td>138</td>            <td>208</td></tr>
            <tr><td>Studio 4 (WEBY/ESPN) - Talent</td>                 <td>???</td>            <td>213</td></tr>
            <tr><td>Studio 4 (WEBY/ESPN) - Board Op</td>               <td>???</td>            <td>213</td></tr>
            <tr><td>Studio 5 (Production)</td>                         <td>105</td>            <td>119</td></tr>
            <tr><td>Newsroom Desk 1 (News Tip-Line)</td>               <td>119</td>            <td>107</td></tr>
            <tr><td>Newsroom Desk 1 (Hybrid)</td>                      <td>133</td>            <td>107</td></tr>
            <tr><td>Newsroom Desk 2</td>                               <td>121</td>            <td>107</td></tr>
            <tr><td>Newsroom Desk 3</td>                               <td>???</td>            <td>107</td></tr>
            <tr><td>Newsroom Desk 4</td>                               <td>142</td>            <td>107</td></tr>
            <tr><td>Newsroom (Traffic Tip-Line)</td>                   <td>111</td>            <td>107</td></tr>
            <tr><td>Production Wedge</td>                              <td>130</td>            <td>207</td></tr>
            <tr><td>Production Room</td>                               <td>116</td>            <td>206</td></tr>
            <tr><td>Production Room (Hybrid)</td>                      <td>109</td>            <td>206</td></tr>
            <tr><td>Production Assistant (Loft)</td>                   <td>136</td>            <td>216</td></tr>
        </tbody>
    </table>
</section>
