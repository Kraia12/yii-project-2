<?php
/* @var $this RegionsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Regions',
);

?>

<h1>Regions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
