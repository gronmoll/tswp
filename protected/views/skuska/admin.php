<?php
/* @var $this SkuskaController */
/* @var $model Skuska */

$this->breadcrumbs=array(
	'Termíny'=>array('index'),
	'Správa',
);

$this->menu=array(
	array('label'=>'Zobraziť termíny', 'url'=>array('index', 'isVisible'=> false, 'isSkuskaVisible'=>true)),
	array('label'=>'Vytvoriť termín', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#skuska-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Správa termínov</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Rozšírené vyhľadávanie','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'skuska-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'datum',
		'miestnost',
		'kapacita',
		'poznamka',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
