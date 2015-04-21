<?php
/* @var $this TerminPredmetController */
/* @var $model TerminPredmet */

$this->breadcrumbs=array(
	'Termin Predmets'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editovať',
);

$this->menu=array(
	array('label'=>'Zobraziť rozvrhové jednotky', 'url'=>array('index','isVisible'=> false)),
	array('label'=>'Vytvoriť rozvrhovú jednotku', 'url'=>array('create')),
	array('label'=>'Zobraziť rozvrhovú jednotku', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Správa rozvrhových jednotiek', 'url'=>array('admin')),
);
?>

<h1>Editovať rozvrhovú jednotku <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>