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

	$dp=new CActiveDataProvider('Skuska', array(
            'criteria'=>array(
            	'condition'=>'id not in (SELECT up.id_skuska FROM user_skuska up WHERE up.id_user = '.Yii::app()->user->getId().')',
            )));

	$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dp,
	'itemView'=>'_view',
	));
?>
