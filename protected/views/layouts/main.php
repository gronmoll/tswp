<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <!-- Tento riadok zapne bootstrap cssko, avsak bez temy-->
    <?php Yii::app()->bootstrap->registerAllCss(); ?>
</head>

<body>

<div class="container" id="page">

    <!--
    <div id="header">
        <div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
    </div><!-- header -->


	<div id="mainmenu" class="navbar navbar default">
		<?php
			$isAdmin = false;
			if(isset(Yii::app()->user->type)){
				$isAdmin = (Yii::app()->user->type==="admin");
			} else {
				$isAdmin = false;
			}
		?>
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Domov', 'url'=>array('/site/index')),
				array('label'=>'Používatelia', 'url'=>array('/user/index'), 'visible'=>$isAdmin),
				//array('label'=>'Štúdium', 'url'=>array('/site/page', 'view'=>'about'), 'visible'=>!Yii::app()->user->isGuest),
				//array('label'=>'Zápis', 'url'=>array(''), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Predmety', 'url'=>array('/predmet/index', 'isVisible'=> false, 'isPredmetVisible'=>true), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Termíny', 'url'=>array('/skuska/index', 'isVisible'=> false, 'isSkuskaVisible'=>true), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Rozvrh', 'url'=>array('/terminPredmet/index', 'isVisible'=> false, 'isTerminPredmetVisible'=>true), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Login', 'url'=>array('/user/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Registrácia', 'url'=>array('/user/register'), 'visible'=>Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
        ©StudentIS 2015
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
