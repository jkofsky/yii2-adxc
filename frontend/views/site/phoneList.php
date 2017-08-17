<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Phone List';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-phone-list">
    <h1><?= Html::encode($this->title) ?></h1>

    REV. 8.15.17
    <table class="table table-condensed table-striped">
        <thead>
            <tr>
                <th>Location</th>                           <th>Extension</th>  <th>Number</th>         <th>Room</th>
            </tr>
        </thead>
        <tbody>
            <tr><td>Front Desk</td>                         <td>100 or 0</td>   <td>850-262-6000</td>   <td>102</td></tr>
            <tr><td>Front Door Access</td>                  <td>108</td>        <td></td>               <td>Outside</td></tr>
            <tr><td>Conference Room (Speaker Ph.)</td>      <td>208</td>        <td></td>               <td>122</td></tr>
            <tr><td>Conference Room (Digital)</td>          <td>141</td>        <td></td>               <td>122</td></tr>
            <tr><td>Conference Room</td>                    <td>150</td>        <td></td>               <td>122</td></tr>
            <tr><td>Conference Room</td>                    <td>151</td>        <td></td>               <td>122</td></tr>
            <tr><td>Engineering TOC</td>                    <td>143</td>        <td></td>               <td>124</td></tr>
            <tr><td>Engineering Satellite Rack</td>         <td>159</td>        <td></td>               <td>159</td></tr>
            <tr><td>Promotions Office</td>                  <td>104</td>        <td></td>               <td>121</td></tr>
            <tr><td>Traffic Department</td>                 <td>117</td>        <td></td>               <td>152A</td></tr>
            <tr><td>3rd Floor Warehouse</td>                <td>135</td>        <td></td>               <td>221F</td></tr>
            <tr><td>NewsRadio Listener Line</td>            <td></td>           <td>850-437-1620</td>   <td>Studio</td></tr>
            <tr><td>NewsRadio On-Air (Telos)</td>           <td>132</td>        <td>850-262-6132</td>   <td>109</td></tr>
            <tr><td>NewsRadio Studio - Talent</td>          <td>125</td>        <td></td>               <td>109</td></tr>
            <tr><td>NewsRadio Studio - Board Op</td>        <td>131</td>        <td></td>               <td>109</td></tr>
            <tr><td>Newsroom Tip-Line</td>                  <td>119</td>        <td>850-262-6119</td>   <td>107</td></tr>
            <tr><td>Newsroom Desk 1 On-Air</td>             <td>133</td>        <td></td>               <td>107</td></tr>
            <tr><td>Newsroom Desk 2 On-Air</td>             <td>120</td>        <td></td>               <td>107</td></tr>
            <tr><td>Newsroom FAX</td>                       <td>119</td>        <td>850-262-6123</td>   <td>107</td></tr>
            <tr><td>Newsroom Traffic Reporter/Tip-Line</td> <td>111</td>        <td>850-262-6111</td>   <td>107</td></tr>
            <tr><td>Production Booth - Wedge</td>           <td>130</td>        <td></td>               <td>207</td></tr>
            <tr><td>Production (Digital)</td>               <td>116</td>        <td></td>               <td></td></tr>
            <tr><td>Production Studio - Board Op</td>       <td>138</td>        <td></td>               <td>208H</td></tr>
            <tr><td>Production Studio - Talent</td>         <td>114</td>        <td></td>               <td>208F</td></tr>
            <tr><td>Production Room</td>                    <td>116</td>        <td></td>               <td></td></tr>
            <tr><td>Production Rooom - Hybrid</td>          <td>109</td>        <td></td>               <td></td></tr>
            <tr><td>Production Assistant (Loft)</td>        <td>136</td>        <td></td>               <td></td></tr>
            <tr><td>FM Tower (confidential)</td>            <td></td>           <td>251-931-3302</td>   <td>Bunker</td></tr>
            <tr><td>HD-2 Studio</td>                        <td>105</td>        <td>850-262-6105</td>   <td>119</td></tr>
            <tr><td>Main Office FAX</td>                    <td></td>           <td>850-494-0778</td>   <td>146</td></tr>
            <tr><td>e-Fax Dave</td>                         <td></td>           <td>850-378-1030</td>   <td></td></tr>
            <tr><td>CatCountry 98.7 Listener Line</td>      <td></td>           <td>850-430-1987</td>   <td>Studio</td></tr>
        </tbody>
    </table>
</div>
