<?php
/* @var $this SkuskaController */
/* @var $model Skuska */

$this->breadcrumbs=array(
	'Termíny'=>array('index'),
	'Nový',
);

$this->menu=array(
	array('label'=>'Zobraziť termíny', 'url'=>array('index', 'isVisible'=> false)),
	array('label'=>'Správa termínov', 'url'=>array('admin')),
);
?>

<h1>Vytvoriť nový termín</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>