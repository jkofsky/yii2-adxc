<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ADXC Development Landing Page</title>
        <style type="text/css">
            /*body {background-color: #fff; color: #222; font-family: sans-serif;}*/
            pre {margin: 0; font-family: monospace;}
            table {border-collapse: collapse; border: 0; width: 100%; box-shadow: 1px 2px 3px #ccc;}
            .center {text-align: center;}
            .center table {margin: 1em auto; text-align: left;}
            .center th {text-align: center !important;}
            td, th {border: 1px solid #666; font-size: 75%; vertical-align: baseline; padding: 4px 5px;}
            th {position: sticky; top: 0; background: inherit;}
            .p {text-align: left;}
            .e {background-color: #ccf; width: 300px; font-weight: bold;}
            .h {background-color: #99c; font-weight: bold;}
            .v {background-color: #ddd; max-width: 300px; overflow-x: auto; word-wrap: break-word;}
            .v i {color: #999;}
            img {float: right; border: 0;}
            hr {background-color: #ccc; border: 0; height: 1px;}
            #phpinfo{width: 90%; margin: 0 auto;}
        </style>
    </head>
    <body>
        <h1 style="text-align: center;">yii2-ADXC Website</h1>
        <p style="font-size: large; font-weight: bolder; text-align: center;">
            <a href="/frontend/web/index.php">ADXC Frontend</a><br>
            <a href="/backend/web/index.php">ADXC Admin</a><br>
        </p>
        <br>

        <div id="phpinfo">
            <?php
            ob_start();
            phpinfo(INFO_GENERAL);
            $pinfo = ob_get_contents();
            ob_end_clean();

            // the name attribute "module_Zend Optimizer" of an anker-tag is not xhtml
            // valide, so replace it with "module_Zend_Optimizer"
            echo ( str_replace("module_Zend Optimizer", "module_Zend_Optimizer", preg_replace('%^.*<body>(.*)</body>.*$%ms', '$1', $pinfo))
            );
            ?>
        </div><!-- phpinfo -->    
    </body>
</html>