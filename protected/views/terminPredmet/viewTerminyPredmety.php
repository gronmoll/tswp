<?php
/* @var $this PredmetController */
/* @var $dataProvider CActiveDataProvider */
$user = User::model()->findByAttributes(array('email'=>Yii::app()->user->name)); 

$this->breadcrumbs=array(
	'Rozvrhové jednotky',
);

if($user->type === "admin" || $user->type === "ucitel"){
	$this->menu=array(
		array('label'=>'Vytvoriť rozvrhovú jednotku', 'url'=>array('create')),
		array('label'=>'Správa rozvrhových jednotiek', 'url'=>array('admin')),
	);
}	
?>

<h1>Všetky rozvrhové jednotky</h1>

<?php 
	$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	));
?>
