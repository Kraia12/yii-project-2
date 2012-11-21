<?php
/* @var $this CountriesController */
/* @var $model Countries */

$this->breadcrumbs=array(
	'Regiones',
);
?>
<h1>Selecciona un Estado / Región</h1>

<?php
 $this->renderPartial('/regions/_view', array(
	    'data' => $model->regions,
	    ));
 ?>
