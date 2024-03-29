<?php
/* @var $this CountriesController */
/* @var $model Countries */

$this->breadcrumbs=array(
	'Countries'=>array('index'),
	$model->name=>array('view','id'=>$model->code),
	'Update',
);

$this->menu=array(
	array('label'=>'List Countries', 'url'=>array('index')),
	array('label'=>'Create Countries', 'url'=>array('create')),
	array('label'=>'View Countries', 'url'=>array('view', 'id'=>$model->code)),
	array('label'=>'Manage Countries', 'url'=>array('admin')),
);
?>

<h1>Update Countries <?php echo $model->code; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>