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

<h1>Error</h1>
<p>Termín je obsadený!</p>

<h2><?php echo CHtml::link('Späť na všetky termíny', array('skuska/viewSkusky', 'isVisible' => true)); ?></h2>


<?php /*$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); */
?>
