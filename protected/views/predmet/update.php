<?php
/* @var $this PredmetController */
/* @var $model Predmet */

$this->breadcrumbs=array(
	'Predmety'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Zoznam predmetov', 'url'=>array('index', 'isVisible'=> false)),
	array('label'=>'Vytvoriť predmet', 'url'=>array('create')),
	array('label'=>'Zobraziť predmet', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Správa predmetov', 'url'=>array('admin')),
);
?>

<h1>Editovať predmet <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>