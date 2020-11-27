<?php
/* @var $this yii\web\View */

use yii\bootstrap4\Html;
use yii\helpers\Url;

$this->title = Yii::$app->name . ' -  Public IP Addresses';
$this->params['breadcrumbs'][] = ['label' => 'Engineering', 'url' => ['engineering/index']];
$this->params['breadcrumbs'][] = 'Palafox Burk Wiring';

?>
<h1>Palafox Transmitter Control Wiring</h1>

<section>
    <div class="card shadow border-info">
        <div class="card-header alert-info"><?= Html::encode('External Control Wiring'); ?></div>
        <div class="card-body">
            <table class="table-bordered table-striped text-center w-100">
                <thead>
                    <tr>
                        <th>Equipment</th>
                        <th>Purpose</th>
                        <th>Signal</th>
                        <th>Wire</th>
                        <th colspan="2">(+)</th>
                        <th colspan="2">(-)</th>
                        <th colspan="2">Equipment</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="white-space: normal;">Antenna Controller</td>
                        <td>Status</td>
                        <td>Antenna Interlock</td>
                        <td>Red&Blk</td>
                        <td>TB1-1</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_red.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>TB1-2</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_black.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>Harris DX10</td>
                        <td>&ndash;</td>
                    </tr>
                    <tr>
                        <td rowspan="3" style="white-space: normal;">Antenna Switch</td>
                        <td>Status</td>
                        <td>DX10-1 to Antenna</td>
                        <td>Red&Blk</td>
                        <td>???</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_red.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>???</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_black.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>PlusX-600 #1</td>
                        <td>S-11</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>DX10-2 to Antenna</td>
                        <td>Red&Blk</td>
                        <td>???</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_red.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>???</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_black.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>PlusX-600 #1</td>
                        <td>S-12</td>
                    </tr>
                    <tr>
                        <td>Control</td>
                        <td>Switch Position</td>
                        <td>Red&Blk</td>
                        <td>????</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_red.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>????</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_black.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>PlusX-600 #1</td>
                        <td>R-5</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card shadow border-info">
        <div class="card-header alert-info"><?= Html::encode('Burk Remote Control'); ?></div>
        <div class="card-body">
            <table class="table-bordered table-striped text-center w-100">
                <thead>
                    <tr>
                        <th>Equipment</th>
                        <th>Purpose</th>
                        <th>Signal</th>
                        <th>Wire</th>
                        <th colspan="2">(+)</th>
                        <th colspan="2">(-)</th>
                        <th colspan="2">Burk</th>
                    </tr>
                </thead>
                <tbody>

                    <!-- DX10 Meters -->
                    <tr>
                        <td rowspan="25" style="background-color: bisque;" style="white-space: normal;">DX10 #1<br>(25-pair)</td>
                        <td rowspan="6" class="table-active">Meters</td>
                        <td>Forward Power</td>
                        <td>Blu&amp;Wht</td>
                        <td>TB1-3</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_blue_white_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>TB1-10</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_white_blue_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>PlusX-600 #1</td>
                        <td>M-1</td>
                    </tr>
                    <tr>
                        <td>Reflected Power</td>
                        <td>Org&amp;Wht</td>
                        <td>TB1-4</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_orange_white_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>TB1-10</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_white_orange_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>PlusX-600 #1</td>
                        <td>M-2</td>
                    </tr>
                    <tr>
                        <td>Supply Voltage</td>
                        <td>Grn&amp;Wht</td>
                        <td>TB1-5</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_green_white_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>TB1-10</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_white_green_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>PlusX-600 #1</td>
                        <td>M-3</td>
                    </tr>
                    <tr>
                        <td>Supply Current</td>
                        <td>Brn&amp;Wht</td>
                        <td>TB1-6</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_brown_white_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>TB1-10</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_white_brown_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>PlusX-600 #1</td>
                        <td>M-4</td>
                    </tr>
                    <tr>
                        <td>Bypass Filter VSWR</td>
                        <td>Gry&amp;Wht</td>
                        <td>TB1-7</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_gray_white_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>TB1-10</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_white_gray_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>PlusX-600 #1</td>
                        <td>M-5</td>
                    </tr>
                    <tr>
                        <td>Antenna VSWR</td>
                        <td>Blue&amp;Red</td>
                        <td>TB1-8</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_blue_red_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>TB1-10</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_red_blue_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>PlusX-600 #1</td>
                        <td>M-6</td>
                    </tr>

                    <!-- Status -->
                    <tr>
                        <td rowspan="9" class="table-light">Status</td>
                        <td>Low Power Indicator</td>
                        <td>Org&amp;Red</td>
                        <td>TB1-20</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_orange_red_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>TB1-14</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_red_orange_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>PlusX-600 #1</td>
                        <td>S-1</td>
                    </tr>
                    <tr>
                        <td>Medium Power Indicator</td>
                        <td>Grn&amp;Red</td>
                        <td>TB1-18</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_green_red_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>TB1-14</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_red_green_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>PlusX-600 #1</td>
                        <td>S-2</td>
                    </tr>
                    <tr>
                        <td>High Power Indicator</td>
                        <td>Brn&amp;Red</td>
                        <td>TB1-16</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_brown_red_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>TB1-14</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_red_brown_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>PlusX-600 #1</td>
                        <td>S-3</td>
                    </tr>
                    <tr>
                        <td>Interlock Open</td>
                        <td>Gry&amp;Red</td>
                        <td>TB2-22</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_gray_red_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>TB2-19</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_red_gray_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>PlusX-600 #1</td>
                        <td>S-4</td>
                    </tr>
                    <tr>
                        <td>Load VSWR Error Occured</td>
                        <td>Blu&amp;Blk</td>
                        <td>TB2-9</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_blue_black_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>TB2-19</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_black_blue_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>PlusX-600 #1</td>
                        <td>S-5</td>
                    </tr>
                    <tr>
                        <td>Supply Voltage Overload</td>
                        <td>Org&amp;Blk</td>
                        <td>TB2-24</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_orange_black_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>TB2-19</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_black_orange_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>PlusX-600 #1</td>
                        <td>S-6</td>
                    </tr>
                    <tr>
                        <td>Supply Current Overload</td>
                        <td>Grn&amp;Blk</td>
                        <td>TB2-25</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_green_black_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>TB2-19</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_black_green_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>PlusX-600 #1</td>
                        <td>S-7</td>
                    </tr>
                    <tr>
                        <td>Type 3 Falut Occured</td>
                        <td>Brn&amp;Blk</td>
                        <td>TB2-33</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_brown_black_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>TB2-19</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_black_brown_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>PlusX-600 #1</td>
                        <td>S-8</td>
                    </tr>
                    <tr>
                        <td>Under Local Control</td>
                        <td>Gry&amp;Blk</td>
                        <td>TB2-30</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_gray_black_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>TB2-19</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_black_gray_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>PlusX-600 #1</td>
                        <td>S-9</td>
                    </tr>

                    <!-- Controls -->
                    <tr>
                        <td rowspan="10" class="table-active">Control Relays</td>
                        <td>High Power (Raise*)</td>
                        <td>Blu/Yel</td>
                        <td>TB1-22</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_blue_yellow_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>TB1-24</td>
                        <td rowspan="8" class="table-success">
                            Jumpered<br> together<br> and tied<br> to TB1-9<br>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_green.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                        </td>
                        <td>PlusX-600 #1</td>
                        <td>R-1 (NO)</td>
                    </tr>
                    <tr>
                        <td>Medium Power (Lower*)</td>
                        <td>Yel/Blu</td>
                        <td>TB1-26</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_yellow_blue_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>TB1-28</td>
                        <td>PlusX-600 #1</td>
                        <td>R-7 (NO)</td>
                    </tr>
                    <tr>
                        <td>Low Power (Raise*)</td>
                        <td>Org/Yel</td>
                        <td>TB1-30</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_orange_yellow_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>TB1-32</td>
                        <td>PlusX-600 #1</td>
                        <td>R-2 (NO)</td>
                    </tr>
                    <tr>
                        <td>Off Control (Lower*)</td>
                        <td>Yel/Org</td>
                        <td>TB1-33</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_yellow_orange_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>TB1-35</td>
                        <td>PlusX-600 #1</td>
                        <td>R-8 (NO)</td>
                    </tr>
                    <tr>
                        <td>Raise Power (Raise*)</td>
                        <td>Grn/Yel</td>
                        <td>TB1-29</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_green_yellow_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>TB1-31</td>
                        <td>PlusX-600 #1</td>
                        <td>R-3 (NO)</td>
                    </tr>
                    <tr>
                        <td>Lower Power (Lower*)</td>
                        <td>Yel/Grn</td>
                        <td>TB1-25</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_yellow_green_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>TB1-27</td>
                        <td>PlusX-600 #1</td>
                        <td>R-9 (NO)</td>
                    </tr>
                    <tr>
                        <td>Overload Reset (Raise*)</td>
                        <td>Brn/Yel</td>
                        <td>TB1-38</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_brown_yellow_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>TB1-40</td>
                        <td>PlusX-600 #1</td>
                        <td>R-4 (NO)</td>
                    </tr>
                    <tr>
                        <td>Spare (Lower*)</td>
                        <td>Yel/Brn</td>
                        <td>TB1-38</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_yellow_brown_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>TB1-40</td>
                        <td>PlusX-600 #1</td>
                        <td>R-10 (NO)</td>
                    </tr>
                    <tr>
                        <td>+15vdc Control Voltage</td>
                        <td>Gry&amp;Yel</td>
                        <td>TB1-#</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_gray_yellow_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_yellow_gray_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td colspan="2" class="table-success">TB1-9 is Ground</td>
                        <td>PlusX-600 #1</td>
                        <td>R1-R4 Comm<br>R7-R10 Comm</td>
                    </tr>
                    <tr class="table-danger">
                        <td colspan="8" class="text-left" style="white-space: normal;">Control relays of the Burk are used to pass
                            a voltage (+15vdc) from the Common to Normally Open (NO) 
                            contacts when activated to trigger the DX10's control.<br>
                            * - In the Burk, the relays are paired: R1 &amp; R7,
                            R2 &amp; R8, R3 &amp; R9, etc. The Raise/Lower indications
                            are the command, in the Burk, to issue that triggers
                            the associated control relay. (ie: For R1 &amp; R7: 
                            Raise triggers R1, Lower triggers R7)</td>
                    </tr>

                    <!-- DX10 #2 -->
                    <tr>
                        <td rowspan="1" class="table-dark" style="white-space: normal;">DX10 #2</td>
                        <td colspan="9" class="text-left" style="white-space: normal;">The Harris DX10 #2 is wired exactly the same, except
                            wired to the Burk PlusX-600 #2, instead of the PlusX-600 #1.</td>
                    </tr>

                    <!-- Temperature Meters -->
                    <tr>
                        <td rowspan="25" style="white-space: normal;">Burk Temperature Sensor<br>(4-pair Cat)</td>
                        <td rowspan="4" class="table-active">Meters</td>
                        <td>Rack Temperature</td>
                        <td>Blu/Wht</td>
                        <td>Pin 1</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_blue_white_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td rowspan="2">Pin 6</td>
                        <td rowspan="2"><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_white_blue_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>Wht/Blu</td>
                        <td>PlusX-600 #1</td>
                        <td>M-7</td>
                    </tr>
                    <tr>
                        <td>DX10 #1 Temperature</td>
                        <td>Org/Wht</td>
                        <td>Pin 2</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_orange_white_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>PlusX-600 #1</td>
                        <td>M-8</td>
                    </tr>
                    <tr>
                        <td>DX10 #2 Temperature</td>
                        <td>Grn/Wht</td>
                        <td>Pin 3</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_green_white_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td rowspan="2">Pin 6</td>
                        <td rowspan="2"><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_white_green_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>Wht/Grn</td>
                        <td>PlusX-600 #1</td>
                        <td>M-9</td>
                    </tr>
                    <tr>
                        <td>Outside Temperature</td>
                        <td>Wht/Org</td>
                        <td>Pin 4</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_white_orange_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>PlusX-600 #1</td>
                        <td>M-10</td>
                    </tr>
                    <tr>
                        <td class="table-light">Status</td>
                        <td>Temperature Module Power</td>
                        <td>Brn&amp;Wht</td>
                        <td>Pin 5</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_brown_white_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>Pin 6</td>
                        <td><?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_white_brown_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?></td>
                        <td>PlusX-600 #1</td>
                        <td>S-10</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>


