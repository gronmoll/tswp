<?php
/* @var $this PredmetController */
/* @var $dataProvider CActiveDataProvider */
$user = User::model()->findByAttributes(array('email'=>Yii::app()->user->name)); 

$this->breadcrumbs=array(
	'Termíny',
);


if($user->type === "admin" || $user->type === "ucitel"){
	$this->menu=array(
		array('label'=>'Vytvoriť termín', 'url'=>array('create')),
		array('label'=>'Správa termínov', 'url'=>array('admin')),
	);
}	
?>

<h1>Dostupné termíny</h1>

<?php 
	$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	));
?>
