<?php
/* @var $this PredmetController */
/* @var $dataProvider CActiveDataProvider */
$user = User::model()->findByAttributes(array('email'=>Yii::app()->user->name)); 

$this->breadcrumbs=array(
	'Predmety',
);


if($user->type === "admin"){
	$this->menu=array(
		array('label'=>'Vytvoriť predmet', 'url'=>array('create')),
		array('label'=>'Správa predmetov', 'url'=>array('admin')),
	);
}	
?>

<h1>Všetky predmety</h1>

<?php 
	$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	));
?>
