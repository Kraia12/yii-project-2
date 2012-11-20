<?php
/* @var $this CountriesController */
/* @var $model Countries */

/*$this->breadcrumbs=array(
	'Countries'=>array('index'),
	$model->name,
);*/
?>
<h1>Selecciona un Estado de <?php echo $model->name; ?></h1>

<?php
 $this->renderPartial('/regions/_view', array(
	    'data' => $model->regions,
	    ));
 ?>
