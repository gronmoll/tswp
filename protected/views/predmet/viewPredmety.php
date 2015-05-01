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

	$dp=new CActiveDataProvider('Predmet', array(
            'criteria'=>array(
            	'condition'=>'id not in (SELECT up.id_predmet FROM user_predmet up WHERE up.id_user = '.Yii::app()->user->getId().')',
            )));

	$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dp,
	'itemView'=>'_view',
	));
?>
