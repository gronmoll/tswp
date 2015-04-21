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
		array('label'=>'Správa predmetov', 'url'=>array('admin', 'isVisible'=> false)),
	);
}	
?>

<h1>Zapísané predmety</h1>
<h2><?php echo CHtml::link('Zobratiť všetky predmety', array('predmet/viewPredmety', 'isVisible' => true)); ?></h2>

<?php
	
	$dp=new CActiveDataProvider('Predmet', array(
            'criteria'=>array(
            	'condition'=>'id in (SELECT up.id_predmet FROM user_predmet up WHERE up.id_user = '.Yii::app()->user->getId().')',
            )));

	$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dp,
	'itemView'=>'_view',
	));
?>

<?php 
	/*$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	));*/ 

?>
