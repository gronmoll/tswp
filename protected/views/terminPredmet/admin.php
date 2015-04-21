<?php
/* @var $this TerminPredmetController */
/* @var $model TerminPredmet */

$this->breadcrumbs=array(
	'Rozvrhové jednotky'=>array('index'),
	'Správa',
);

$this->menu=array(
	array('label'=>'Zobraziť rozvrhové jednotky', 'url'=>array('index', 'isVisible'=> false)),
	array('label'=>'Vytvoriť rozvrhovú jednotku', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#termin-predmet-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<h1>Správa rozvrhových jednotiek</h1>

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
	'id'=>'termin-predmet-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'miestnost',
		'vyucujuci',
		'den',
		'cas',
		'kapacita',
		'id_predmet',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
