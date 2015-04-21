<?php
/* @var $this PredmetController */
/* @var $model Predmet */

$this->breadcrumbs=array(
	'Predmety'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Zobraziť predmety', 'url'=>array('index', 'isVisible'=> false)),
	array('label'=>'Správa predmetov', 'url'=>array('admin')),
);
?>

<h1>Vytvoriť nový predmet</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>