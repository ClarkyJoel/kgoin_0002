<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/coolMenu.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/js-image-slider.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/generic.css" />
    
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.css" />
    
    <!-- Script -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/js-image-slider.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/tabs.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div id="wrapper-shadow">
    <div class="span11 wrapper">
			<div class="row">
			<div id="header">
				
					<div class="span3 logo">
						<?php include "module/header.php"; ?>
					</div>
					<div class="clear"></div>
					<div class="banner">
						<img src="images/homepage-banner.png" style="padding-top: 5px; width: 1025px;" />
					</div>
				
			</div>
            
            <?php echo $content; ?>
            
			</div>
		</div>
</div>

</body>
</html>
