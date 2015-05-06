<?php
/* @var $this SkuskaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Termíny',
);

$user = User::model()->findByAttributes(array('email'=>Yii::app()->user->name)); 
if($user->type === "admin" || $user->type === "ucitel"){
	$this->menu=array(
			array('label'=>'Vytvoriť termín', 'url'=>array('create')),
			array('label'=>'Správa termínov', 'url'=>array('admin')),
	);	
}
?>

<h1>Zapísané termíny</h1>
<h4><?php echo CHtml::link('Zobraziť všetky termíny', array('skuska/viewSkusky', 'isVisible' => true, 'isSkuskaVisible'=> false), array('class'=>'lic')); ?></h4>

<?php

	$dp=new CActiveDataProvider('Skuska', array(
            'criteria'=>array(
            	'condition'=>'id in (SELECT us.id_skuska FROM user_skuska us WHERE us.id_user = '.Yii::app()->user->getId().')',
            )));

	$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dp,
	'itemView'=>'_view',
	));
?>

<?php /*$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); */
?>
