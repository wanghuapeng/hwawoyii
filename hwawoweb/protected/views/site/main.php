<?php
Yii::app()->getClientScript()->registerCoreScript( 'jquery.ui' );
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery-class.js');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery-powerFloat-min.js');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery-smartMenu-min.js');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/artDialog.js');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/iframeTools.js');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/interface.js');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/data.js');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/bsv1.3-core.js');


?>
<?php
Yii::app()->clientScript->registerCssFile(
    Yii::app()->clientScript->getCoreScriptUrl().'/jui/css/base/jquery-ui.css');
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/main/main.css', 'screen, projection');
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/main/themesetting.css', 'screen, projection');
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/main/skins/black.css', 'screen, projection');
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/main/powerFloat.css', 'screen, projection');
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/main/smartMenu.css', 'screen, projection');
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/main/style.css', 'screen, projection');
?>

<div id="zoomWallpaperGrid" class="zoomWallpaperGrid" style="position: absolute;
        z-index: -10; left: 0pt; top: 0pt; overflow: hidden; height: 381px; width: 1440px;">
    <img id="zoomWallpaper" class="zoomWallpaper" style="position: absolute; top: 0pt;
            left: 0pt; height: 381px; width: 1440px;" src="images/pcwxhbeijing.jpg" alt="背景图"/>
</div>
