<?php
/* @var $this SkuskaController */
/* @var $model Skuska */

$this->breadcrumbs=array(
	'Termíny'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editovať',
);

$this->menu=array(
	array('label'=>'Zobraziť termíny', 'url'=>array('index', 'isVisible'=> false)),
	array('label'=>'Vytvoriť termín', 'url'=>array('create')),
	array('label'=>'Zobraziť termín', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Správa termínov', 'url'=>array('admin')),
);
?>

<h1>Editovať termín <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>