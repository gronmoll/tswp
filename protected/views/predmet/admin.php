<?php
/* @var $this PredmetController */
/* @var $model Predmet */

$this->breadcrumbs=array(
	'Predmets'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Zoznam predmetov', 'url'=>array('index', 'isVisible'=> false, 'isPredmetVisible'=>true)),
	array('label'=>'Vytvoriť predmet', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#predmet-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Správa predmetov</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Rozšírené hľadanie','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'predmet-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nazov',
		'fakulta',
		'katedra',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
