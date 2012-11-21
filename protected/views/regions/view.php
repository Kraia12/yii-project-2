<?php
/* @var $this RegionsController */
/* @var $model Regions */

$this->breadcrumbs=array(
	'Regiones',
);

$this->breadcrumbs=array(
'Regiones' =>array('countries/regions'),
$model->name,
);

?>
<h1>Selecciona una Ciudad</h1>

<?php
 $this->renderPartial('/cities/_view', array(
	    'data' => $model,
	    ));
 ?>