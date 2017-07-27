<?php

/**
 * An email obsucator
 * Using JavaScript the obsucate a mailto: link to minimize email address
 * harvesting.
 *
 * @version v1.1 Intial Release for Yii1.1
 * @author Jeff Kofsky
 * @filesource jsEmail.php
 * 
 */
class jsEmail extends CApplicationComponent {

    private $_cssBackground = 'background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAITSURBVBgZpcHLThNhGIDh9/vn7/RApwc5VCmFWBPi1mvwAlx7BW69Afeu3bozcSE7E02ILjCRhRrds8AEbKVS2gIdSjvTmf+TYqLu+zyiqszDMCf75PnnnVwhuNcLpwsXk8Q4BYeSOsWpkqrinJI6JXVK6lSRdDq9PO+19vb37XK13Hj0YLMUTVVyWY//Cf8IVwQEGEeJN47S1YdPo4npDpNmnDh5udOh1YsZRcph39EaONpnjs65oxsqvZEyTaHdj3n2psPpKDLBcuOOGUWpZDOG+q0S7751ObuYUisJGQ98T/Ct4Fuo5IX+MGZr95jKjRKLlSxXxFxOEmaaN4us1Upsf+1yGk5ZKhp8C74H5ZwwCGO2drssLZZo1ouIcs2MJikz1oPmapHlaoFXH1oMwphyTghyQj+MefG+RblcoLlaJG/5y4zGCTMikEwTctaxXq/w9kuXdm9Cuzfh9acujXqFwE8xmuBb/hCwl1GKAnGccDwIadQCfD9DZ5Dj494QA2w2qtQW84wmMZ1eyFI1QBVQwV5GiaZOpdsPaSwH5HMZULi9UmB9pYAAouBQbMHHrgQcnQwZV/KgTu1o8PMgipONu2t5KeaNiEkxgAiICDMCCFeEK5aNauAOfoXx8KR9ZOOLk8P7j7er2WBhwWY9sdbDeIJnwBjBWBBAhGsCmiZxPD4/7Z98b/0QVWUehjkZ5vQb/Un5e/DIsVsAAAAASUVORK5CYII=);';
    private $_aryEmailTld = array(
        'com' => 0, 'org' => 1, 'net' => 2, 'ws' => 3, 'info' => 4, 'edu' => 5,
        'biz' => 6, 'name' => 7, 'pro' => 8, 'us' => 9, 'uk' => 10,
        'gov' => 14, 'mil' => 15,
    );

    public function init() {
        parent::init();
        $this->makePopupJSFile();
    }

//init()

    public function getScriptTag($email, $text = NULL, $param = NULL) {


        if (!isset($email) || stripos($email, '@') === false) {
            return null;
        }

        $aryEmail = explode('@', strtolower($email));

        return sprintf('<script type="text/javascript">%s("%s","%s",%d,"%s"%s)</script>'
                , isset($text) ? "qALcp2pm" : "QfELWaNS"
                , $aryEmail[0]
                , pathinfo($aryEmail[1], PATHINFO_FILENAME)
                , $this->_aryEmailTld[pathinfo($aryEmail[1], PATHINFO_EXTENSION)]
                , $param
                , isset($text) ? ',"' . $text . '"' : NULL
        );
    }

    public function makePopupJSFile() {

        $script = "var tld_ = new Array();";

        foreach ($this->_aryEmailTld as $key => $value) {
            $script .= "tld_[$value]=\"$key\";";
        } //Next ($key=>$value)
        $script .= "var m_ = \"mailto:\";";
        $script .= "var a_ = \"@\";";
        $script .= "var d_ = \".\";";

        $script .= "function QfELWaNS(name, dom, tl, params) {";
        $script .= "   var s = name+'&#064;'+dom+'&#046;'+tld_[tl];";
        $script .= "   document.write('<a href=\"'+m_+e(name,dom,tl)+params+'\" title=\"Send Email\">'+s+'</a>');";
        $script .= "} ";

        $script .= "function qALcp2pm(name, dom, tl, params, display) {";
        $script .= "   var s = name+'&#064;'+dom+'&#046;'+tld_[tl];";
        $script .= "   document.write('<a href=\"'+m_+e(name,dom,tl)+params+'\" title=\"'+s+'\">'+display+'</a>');";
        $script .= "} ";

        $script .= "function e(name, dom, tl) {";
        $script .= "   var s = name+a_;";
        $script .= "   if (tl!=-2)   {";
        $script .= "      s+= dom;";
        $script .= "      if (tl>=0)";
        $script .= "         s+= d_+tld_[tl];";
        $script .= "   } else {";
        $script .= "      s+= swapper(dom);";
        $script .= "   } ";
        $script .= "   return s;";
        $script .= "} \n";

        $script .= "function swapper(d) {";
        $script .= "   var s = \"\";";
        $script .= "   for (var i=0; i<d.length; i+=2) {";
        $script .= "      if (i+1==d.length)";
        $script .= "         s += d.charAt(i);";
        $script .= "      else";
        $script .= "         s += d.charAt(i+1)+d.charAt(i);";
        $script .= "   } ";
        $script .= "   return s.replace(/\\?/g,'.');";
        $script .= "} ";

        Yii::app()->clientScript->registerCoreScript('jquery');
        Yii::app()->clientScript->registerScript('jsEmail', $script, CClientScript::POS_HEAD);
    }

//End makePopupJS()
}
