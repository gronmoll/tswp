<?php
/* @var $this TerminPredmetController */
/* @var $model TerminPredmet */

$this->breadcrumbs=array(
	'Rozvrhové jednotky'=>array('index'),
	$model->id,
);

$isAdminUcitel = false;
if(isset(Yii::app()->user->type)){
	$isAdminUcitel = (Yii::app()->user->type==="admin" || Yii::app()->user->type==="ucitel");
} else {
	$isAdmin = false;
}

$this->menu=array(
	array('label'=>'Zobraziť rozvrhové jednotky', 'url'=>array('index','isVisible'=> false)),
	array('label'=>'Vytvoriť rozvrhovú jednotku', 'url'=>array('create'), 'visible' => $isAdminUcitel),
	array('label'=>'Editovať rozvrhovú jednotku', 'url'=>array('update', 'id'=>$model->id), 'visible' => $isAdminUcitel),
	array('label'=>'Vymazať rozvrhovú jednotku', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'), 'visible' => $isAdminUcitel),
	array('label'=>'Správa rozvrhových jednotiek', 'url'=>array('admin'), 'visible' => $isAdminUcitel),
);
?>

<h1>Zobraziť rozvrhovú jednotku #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'miestnost',
		'vyucujuci',
		'den',
		'cas',
		'kapacita',
		'id_predmet',
	),
)); ?>
