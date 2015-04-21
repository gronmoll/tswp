<?php
/* @var $this TerminPredmetController */
/* @var $model TerminPredmet */

$this->breadcrumbs=array(
	'Rozvrhové jednotky'=>array('index'),
	'Nový',
);

$this->menu=array(
	array('label'=>'Zobraziť rozvrhové jednotky', 'url'=>array('index')),
	array('label'=>'Správa rozvrhových jednotiek', 'url'=>array('admin')),
);
?>

<h1>Vytvoriť rozvrhovú jednotku</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>