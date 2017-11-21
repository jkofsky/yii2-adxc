<?php
/* Partial view for password strength requirements */

use yii\helpers\Html;
?>
    <div class="panel panel-danger">
        <div class="panel-heading" style="font-weight: bolder;">Password Requirements</div>
        <div class="panel-body">
            <ul>
                <li>Minium Length is 8 characters.</li>
                <li>Must have at least 1 UPPERCASE letter.</li>
                <li>Must have at least 1 lowercase letter.</li>
                <li>Must have at least 1 numeric/digit character.</li>
                <li>May have special characters (ie. punctuation)</li>
                <li>Can NOT contain your Username.</li>
                <li>Can NOT contain an Email address.</li>
                <li>Can NOT contain any spaces.</li>
                <li>Tips on good password practices can be 
                    <?= Html::a('found here', ['site/reading', 'page' => 'passwordDosAndDonts']);
                    ?>.</li>
            </ul>
        </div>
    </div>
