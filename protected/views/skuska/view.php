<?php
/* @var $this SkuskaController */
/* @var $model Skuska */

$this->breadcrumbs=array(
	'Termíny'=>array('index'),
	$model->id,
);

$isAdminUcitel = false;
if(isset(Yii::app()->user->type)){
	$isAdminUcitel = (Yii::app()->user->type==="admin" || Yii::app()->user->type==="ucitel");
} else {
	$isAdmin = false;
}

$this->menu=array(
	array('label'=>'Zobraziť termíny', 'url'=>array('index', 'isVisible'=> false)),
	array('label'=>'Vytvoriť termín', 'url'=>array('create'), 'visible' => $isAdminUcitel),
	array('label'=>'Editovať termín', 'url'=>array('update', 'id'=>$model->id), 'visible' => $isAdminUcitel),
	array('label'=>'Vymazať termín', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'), 'visible' => $isAdminUcitel),
	array('label'=>'Správa termínov', 'url'=>array('admin'), 'visible' => $isAdminUcitel),
);
?>

<h1>Termín #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'datum',
		'cas',
		'miestnost',
		'kapacita',
		'poznamka',
		'id_predmet',
	),
)); ?>
