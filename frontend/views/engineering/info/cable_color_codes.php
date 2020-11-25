<?php
/* @var $this yii\web\View */

use yii\bootstrap4\Html;
use yii\helpers\Url;

$this->title = Yii::$app->name . ' -  Public IP Addresses';
$this->params['breadcrumbs'][] = ['label' => 'Engineering', 'url' => ['engineering/index']];
$this->params['breadcrumbs'][] = 'Color Codes';

//$this->menu = $this->getSidebarMenu();
?>
<h1>Cable Color Codes</h1>

<section class="card-columns mb-0">
    <div class="card shadow border-info">
        <div class="card-header alert-info"><?= Html::encode('25-pair (solid)'); ?></div>
        <div class="card-body">
            <table class="table-bordered table-striped w-100">
                <tbody class="w-100">
                    <tr>
                        <th>Pair #</th>
                        <th colspan="2">Major color</th>
                        <th colspan="2">Minor color
                        </th></tr>
                    <tr>
                        <td align="center">1</td>
                        <td rowspan="5" align="right">White</td>
                        <td rowspan="5" bgcolor="white">&nbsp;&nbsp;</td>
                        <td bgcolor="royalblue">&nbsp;&nbsp;</td>
                        <td>Blue</td></tr>
                    <tr>
                        <td align="center">2</td>
                        <td bgcolor="orange"></td>
                        <td>Orange
                        </td></tr>
                    <tr>
                        <td align="center">3</td>
                        <td bgcolor="limegreen"></td>
                        <td>Green
                        </td></tr>
                    <tr>
                        <td align="center">4</td>
                        <td bgcolor="saddlebrown"></td>
                        <td>Brown
                        </td></tr>
                    <tr>
                        <td align="center">5</td>
                        <td bgcolor="slategray"></td>
                        <td>Slate
                        </td></tr>
                    <tr>
                        <td align="center">6</td>
                        <td rowspan="5" align="right">Red</td>
                        <td rowspan="5" bgcolor="red"></td>
                        <td bgcolor="royalblue"></td>
                        <td>Blue
                        </td></tr>
                    <tr>
                        <td align="center">7</td>
                        <td bgcolor="orange"></td>
                        <td>Orange
                        </td></tr>
                    <tr>
                        <td align="center">8</td>
                        <td bgcolor="limegreen"></td>
                        <td>Green
                        </td></tr>
                    <tr>
                        <td align="center">9</td>
                        <td bgcolor="saddlebrown"></td>
                        <td>Brown
                        </td></tr>
                    <tr>
                        <td align="center">10</td>
                        <td bgcolor="slategray"></td>
                        <td>Slate
                        </td></tr>
                    <tr>
                        <td align="center">11</td>
                        <td rowspan="5" align="right">Black</td>
                        <td rowspan="5" bgcolor="black"></td>
                        <td bgcolor="royalblue"></td>
                        <td>Blue
                        </td></tr>
                    <tr>
                        <td align="center">12</td>
                        <td bgcolor="orange"></td>
                        <td>Orange
                        </td></tr>
                    <tr>
                        <td align="center">13</td>
                        <td bgcolor="limegreen"></td>
                        <td>Green
                        </td></tr>
                    <tr>
                        <td align="center">14</td>
                        <td bgcolor="saddlebrown"></td>
                        <td>Brown
                        </td></tr>
                    <tr>
                        <td align="center">15</td>
                        <td bgcolor="slategray"></td>
                        <td>Slate
                        </td></tr>
                    <tr>
                        <td align="center">16</td>
                        <td rowspan="5" align="right">Yellow</td>
                        <td rowspan="5" bgcolor="yellow"></td>
                        <td bgcolor="royalblue"></td>
                        <td>Blue
                        </td></tr>
                    <tr>
                        <td align="center">17</td>
                        <td bgcolor="orange"></td>
                        <td>Orange
                        </td></tr>
                    <tr>
                        <td align="center">18</td>
                        <td bgcolor="limegreen"></td>
                        <td>Green
                        </td></tr>
                    <tr>
                        <td align="center">19</td>
                        <td bgcolor="saddlebrown"></td>
                        <td>Brown
                        </td></tr>
                    <tr>
                        <td align="center">20</td>
                        <td bgcolor="slategray"></td>
                        <td>Slate
                        </td></tr>
                    <tr>
                        <td align="center">21</td>
                        <td rowspan="5" align="right">Violet</td>
                        <td rowspan="5" bgcolor="darkviolet"></td>
                        <td bgcolor="royalblue"></td>
                        <td>Blue
                        </td></tr>
                    <tr>
                        <td align="center">22</td>
                        <td bgcolor="orange"></td>
                        <td>Orange
                        </td></tr>
                    <tr>
                        <td align="center">23</td>
                        <td bgcolor="limegreen"></td>
                        <td>Green
                        </td></tr>
                    <tr>
                        <td align="center">24</td>
                        <td bgcolor="saddlebrown"></td>
                        <td>Brown
                        </td></tr>
                    <tr>
                        <td align="center">25</td>
                        <td bgcolor="slategray"></td>
                        <td>Slate
                        </td></tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card shadow border-info">
        <div class="card-header alert-info"><?= Html::encode('Telephone Wiring'); ?></div>
        <div class="card-body">
            <table class="table-bordered table-striped table-responsive">
                <thead>
                    <tr>
                        <td colspan="2">Older telephone wiring inside customer premises used 
                            4-conductor untwisted wire cable. The 4 conductors were solid red, 
                            green, yellow & black wires. They match to the current 25-color 
                            code as follows:</td>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td width="50%">
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_green.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>green ("Line 1" tip)</td>
                        <td width="50%">
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_white_blue_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>white/blue
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_red.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>red  ("Line 1" ring)
                        </td>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_blue_white_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>blue/white
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_black.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>black  ("Line 2" tip)
                        </td>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_white_orange_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>white/orange
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_yellow.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>yellow  ("Line 2" ring)
                        </td>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_orange_white_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>orange/white
                        </td>
                    </tr>
                </tbody>
            </table>
            <?= Html::img(Url::To('@web/images/engineering/RJ11-cable.png'), ['class' => 'img-fluid']); ?>
        </div>
    </div>

    <div class="card shadow border-info">
        <div class="card-header alert-info"><?= Html::encode('25-pair (stripped)'); ?></div>
        <div class="card-body">
            <table class="table-bordered table-striped table-responsive">
                <thead class="text-center thead-dark">
                    <tr>
                        <th rowspan="2">Color<br><small>(minor/major)</small></th>
                        <th>R (-)</th>
                        <th style="background-color: slategray"></th>
                        <th>T (+)</th>
                        <th rowspan="2">Color<br><small>(major/minor)</small></th>
        <!--                <th rowspan="2">The corresponding<br>pin order in the<br>female RJ21 connector</th>-->
                    </tr>
                    <tr>
                        <th colspan="3">Pin #
                        </th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_blue_white_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            blue/white</td>
                        <td>1</td>
                        <td rowspan="25" bgcolor="slategray"></td>
                        <td>26</td>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_white_blue_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            white/blue</td>
        <!--                <td rowspan="31" style="vertical-align: top;">
                                <img alt="RJ21-female-connector.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/a0/RJ21-female-connector.jpg/160px-RJ21-female-connector.jpg" decoding="async" width="160" height="641" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/a0/RJ21-female-connector.jpg/240px-RJ21-female-connector.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/a0/RJ21-female-connector.jpg/320px-RJ21-female-connector.jpg 2x" data-file-width="372" data-file-height="1491">
                            </td>-->
                    </tr>
                    <tr>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_orange_white_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>orange/white</td>
                        <td>2</td>
                        <td>27</td>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_white_orange_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>white/orange</td>
                    </tr>
                    <tr>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_green_white_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>green/white</td>
                        <td>3</td>
                        <td>28</td>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_white_green_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>white/green</td>
                    </tr>
                    <tr>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_brown_white_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>brown/white</td>
                        <td>4</td>
                        <td>29</td>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_white_brown_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>white/brown</td>
                    </tr>
                    <tr>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_gray_white_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>slate/white</td>
                        <td>5</td>
                        <td>30</td>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_white_gray_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>white/slate</td>
                    </tr>
                    <tr>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_blue_red_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>blue/red</td>
                        <td>6</td>
                        <td>31</td>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_red_blue_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>red/blue</td>
                    </tr>
                    <tr>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_orange_red_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>orange/red</td>
                        <td>7</td>
                        <td>32</td>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_red_orange_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>red/orange</td>
                    </tr>
                    <tr>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_green_red_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>green/red</td>
                        <td>8</td>
                        <td>33</td>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_red_green_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>red/green</td>
                    </tr>
                    <tr>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_brown_red_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>brown/red</td>
                        <td>9</td>
                        <td>34</td>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_red_brown_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>red/brown</td>
                    </tr>
                    <tr>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_gray_red_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>slate/red</td>
                        <td>10</td>
                        <td>35</td>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_red_gray_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>red/slate</td>
                    </tr>
                    <tr>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_blue_black_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>blue/black</td>
                        <td>11</td>
                        <td>36</td>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_black_blue_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>black/blue</td>
                    </tr>
                    <tr>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_orange_black_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>orange/black</td>
                        <td>12</td>
                        <td>37</td>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_black_orange_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>black/orange</td>
                    </tr>
                    <tr>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_green_black_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>green/black</td>
                        <td>13</td>
                        <td>38</td>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_black_green_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>black/green</td>
                    </tr>
                    <tr>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_brown_black_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>brown/black</td>
                        <td>14</td>
                        <td>39</td>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_black_brown_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>black/brown</td>
                    </tr>
                    <tr>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_gray_black_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>slate/black</td>
                        <td>15</td>
                        <td>40</td>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_black_gray_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>black/slate</td>
                    </tr>
                    <tr>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_blue_yellow_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>blue/yellow</td>
                        <td>16</td>
                        <td>41</td>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_yellow_blue_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>yellow/blue</td>
                    </tr>
                    <tr>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_orange_yellow_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>orange/yellow</td>
                        <td>17</td>
                        <td>42</td>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_yellow_orange_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>yellow/orange</td>
                    </tr>
                    <tr>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_green_yellow_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>green/yellow</td>
                        <td>18</td>
                        <td>43</td>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_yellow_green_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>yellow/green</td>
                    </tr>
                    <tr>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_brown_yellow_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>brown/yellow</td>
                        <td>19</td>
                        <td>44</td>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_yellow_brown_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>yellow/brown</td>
                    </tr>
                    <tr>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_gray_yellow_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>slate/yellow</td>
                        <td>20</td>
                        <td>45</td>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_yellow_gray_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>yellow/slate</td>
                    </tr>
                    <tr>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_blue_violet_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>blue/violet</td>
                        <td>21</td>
                        <td>46</td>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_violet_blue_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>violet/blue</td>
                    </tr>
                    <tr>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_orange_violet_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>orange/violet</td>
                        <td>22</td>
                        <td>47</td>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_violet_orange_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>violet/orange</td>
                    </tr>
                    <tr>
                        <td>

                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_green_violet_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>green/violet</td>
                        <td>23</td>
                        <td>48</td>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_violet_green_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>violet/green</td>
                    </tr>
                    <tr>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_brown_violet_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>brown/violet</td>
                        <td>24</td>
                        <td>49</td>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_violet_brown_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>violet/brown</td>
                    </tr>
                    <tr>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_gray_violet_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>slate/violet</td>
                        <td>25</td>
                        <td>50</td>
                        <td>
                            <?= Html::img(Url::To('@web/images/engineering/wireColorCodes/Wire_violet_gray_stripe.svg'), ['class' => 'img-fluid', 'style' => 'height:24px; width:auto']); ?>
                            <br>violet/slate</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card shadow border-info">
        <div class="card-header alert-info"><?= Html::encode('Industrial Cable (ICEA Method 1)'); ?></div>
        <div class="card-body">
            <table class="table-bordered table-striped w-100">
                <tbody class="w-100 text-center">
                    <tr>
                        <th>#</th>
                        <th>Color Code</th>
                        <th width="20%">Primary</th>
                        <th width="20%">Stripe</th></tr>
                    <tr>
                        <td align="center">1</td>
                        <td>Black</td>
                        <td bgcolor="black">&nbsp;&nbsp;</td>
                        <td bgcolor="black">&nbsp;&nbsp;</td></tr>
                    <tr>
                        <td align="center">2</td>
                        <td>Red</td>
                        <td bgcolor="red">&nbsp;&nbsp;</td>
                        <td bgcolor="red">&nbsp;&nbsp;</td></tr>
                    <tr>
                        <td align="center">3</td>
                        <td>Blue</td>
                        <td bgcolor="blue">&nbsp;&nbsp;</td>
                        <td bgcolor="blue">&nbsp;&nbsp;</td></tr>
                    <tr>
                        <td align="center">4</td>
                        <td>Orange</td>
                        <td bgcolor="orange">&nbsp;&nbsp;</td>
                        <td bgcolor="orange">&nbsp;&nbsp;</td></tr>
                    <tr>
                        <td align="center">5</td>
                        <td>Yellow</td>
                        <td bgcolor="yellow">&nbsp;&nbsp;</td>
                        <td bgcolor="yellow">&nbsp;&nbsp;</td></tr>
                    <tr>
                        <td align="center">6</td>
                        <td>Brown</td>
                        <td bgcolor="saddlebrown">&nbsp;&nbsp;</td>
                        <td bgcolor="saddlebrown">&nbsp;&nbsp;</td></tr>
                    <tr>
                        <td align="center">7</td>
                        <td>Red/Black</td>
                        <td bgcolor="red">&nbsp;&nbsp;</td>
                        <td bgcolor="black">&nbsp;&nbsp;</td></tr>
                    <tr>
                        <td align="center">8</td>
                        <td>Blue/Black</td>
                        <td bgcolor="blue">&nbsp;&nbsp;</td>
                        <td bgcolor="black">&nbsp;&nbsp;</td></tr>
                    <tr>
                        <td align="center">9</td>
                        <td>Orange/Black</td>
                        <td bgcolor="orange">&nbsp;&nbsp;</td>
                        <td bgcolor="black">&nbsp;&nbsp;</td></tr>
                    <tr>
                        <td align="center">10</td>
                        <td>Yellow/Black</td>
                        <td bgcolor="yellow">&nbsp;&nbsp;</td>
                        <td bgcolor="black">&nbsp;&nbsp;</td></tr>
                    <tr>
                        <td align="center">11</td>
                        <td>Brown/Black</td>
                        <td bgcolor="saddlebrown">&nbsp;&nbsp;</td>
                        <td bgcolor="black">&nbsp;&nbsp;</td></tr>
                    <tr>
                        <td align="center">12</td>
                        <td>Black/Red</td>
                        <td bgcolor="black">&nbsp;&nbsp;</td>
                        <td bgcolor="red">&nbsp;&nbsp;</td></tr>
                    <tr>
                        <td align="center">13</td>
                        <td>Blue/Red</td>
                        <td bgcolor="blue">&nbsp;&nbsp;</td>
                        <td bgcolor="red">&nbsp;&nbsp;</td></tr>
                    <tr>
                        <td align="center">14</td>
                        <td>Orange/Red</td>
                        <td bgcolor="orange">&nbsp;&nbsp;</td>
                        <td bgcolor="red">&nbsp;&nbsp;</td></tr>
                    <tr>
                        <td align="center">15</td>
                        <td>Yellow/Red</td>
                        <td bgcolor="yellow">&nbsp;&nbsp;</td>
                        <td bgcolor="red">&nbsp;&nbsp;</td></tr>
                    <tr>
                        <td align="center">16</td>
                        <td>Brown/Red</td>
                        <td bgcolor="saddlebrown">&nbsp;&nbsp;</td>
                        <td bgcolor="red">&nbsp;&nbsp;</td></tr>
                    <tr>
                        <td align="center">17</td>
                        <td>Black/Blue</td>
                        <td bgcolor="black">&nbsp;&nbsp;</td>
                        <td bgcolor="blue">&nbsp;&nbsp;</td></tr>
                    <tr>
                        <td align="center">18</td>
                        <td>Red/Blue</td>
                        <td bgcolor="red">&nbsp;&nbsp;</td>
                        <td bgcolor="blue">&nbsp;&nbsp;</td></tr>
                    <tr>
                        <td align="center">19</td>
                        <td>Orange/Blue</td>
                        <td bgcolor="orange">&nbsp;&nbsp;</td>
                        <td bgcolor="blue">&nbsp;&nbsp;</td></tr>
                    <tr>
                        <td align="center">20</td>
                        <td>Yellow/Blue</td>
                        <td bgcolor="yellow">&nbsp;&nbsp;</td>
                        <td bgcolor="blue">&nbsp;&nbsp;</td></tr>
                    <tr>
                        <td align="center">21</td>
                        <td>Brown/Blue</td>
                        <td bgcolor="saddlebrown">&nbsp;&nbsp;</td>
                        <td bgcolor="blue">&nbsp;&nbsp;</td></tr>
                    <tr>
                        <td align="center">22</td>
                        <td>Black/Orange</td>
                        <td bgcolor="black">&nbsp;&nbsp;</td>
                        <td bgcolor="orange">&nbsp;&nbsp;</td></tr>
                    <tr>
                        <td align="center">23</td>
                        <td>Red/Orange</td>
                        <td bgcolor="red">&nbsp;&nbsp;</td>
                        <td bgcolor="orange">&nbsp;&nbsp;</td></tr>
                    <tr>
                        <td align="center">24</td>
                        <td>Blue/Orange</td>
                        <td bgcolor="blue">&nbsp;&nbsp;</td>
                        <td bgcolor="orange">&nbsp;&nbsp;</td></tr>
                    <tr>
                        <td align="center">25</td>
                        <td>Yellow/Orange</td>
                        <td bgcolor="yellow">&nbsp;&nbsp;</td>
                        <td bgcolor="orange">&nbsp;&nbsp;</td></tr>
                    <tr>
                        <td align="center">26</td>
                        <td>Brown/Orange</td>
                        <td bgcolor="saddlebrown">&nbsp;&nbsp;</td>
                        <td bgcolor="orange">&nbsp;&nbsp;</td></tr>
                </tbody>
            </table>
        </div>
    </div>

</section>


