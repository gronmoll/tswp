<?php
/* @var $this PredmetController */
/* @var $model Predmet */

$this->breadcrumbs=array(
	'Predmety'=>array('index'),
	$model->id,
);

$isAdmin = false;
if(isset(Yii::app()->user->type)){
	$isAdmin = (Yii::app()->user->type==="admin");
} else {
	$isAdmin = false;
}
		
$this->menu=array(
	array('label'=>'Zoznam predmetov', 'url'=>array('index', 'isVisible'=> false)),
	array('label'=>'Vytvoriť predmet', 'url'=>array('create'), 'visible' => $isAdmin),
	array('label'=>'Editovať predmet', 'url'=>array('update', 'id'=>$model->id), 'visible' => $isAdmin),
	array('label'=>'Vymazať predmet', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'), 'visible' => $isAdmin),
	array('label'=>'Správa predmetov', 'url'=>array('admin'), 'visible' => $isAdmin),
);
?>

<h1>View Predmet #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nazov',
		'fakulta',
		'katedra',
	),
)); ?>
