<?php
/* @var $this UserPredmetController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Predmets',
);

$this->menu=array(
	array('label'=>'Create UserPredmet', 'url'=>array('create')),
	array('label'=>'Manage UserPredmet', 'url'=>array('admin')),
);
?>

<h1>User Predmets</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
