<?php
/* @var $this TerminPredmetController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rozvrhové jednotky',
);

$user = User::model()->findByAttributes(array('email'=>Yii::app()->user->name)); 
if($user->type === "admin" || $user->type === "ucitel"){
	$this->menu=array(
		array('label'=>'Vytvoriť rozvrhovú jednotku', 'url'=>array('create')),
		array('label'=>'Správa rozvrhových jednotiek', 'url'=>array('admin')),
	);
}	
?>

<h1>Rozvrh</h1>
<h4><?php echo CHtml::link('Zobraziť všetky rozvrhové jednotky', array('terminPredmet/viewTerminyPredmety', 'isVisible' => true, 'isTerminPredmetVisible'=>false), array('class'=>'lic')); ?></h4>

<?php

	$dp=new CActiveDataProvider('TerminPredmet', array(
            'criteria'=>array(
            	'condition'=>'id in (SELECT ur.id_termin_predmet FROM user_rozvrh ur WHERE ur.id_user = '.Yii::app()->user->getId().')',
            )));

	$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dp,
	'itemView'=>'_view',
	));
?>

