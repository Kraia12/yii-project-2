<?php
/* @var $this RegionsController */
/* @var $data Regions */
?>

<ul class="view">
<?php foreach($data as $region): ?>
	<li>
	<?php echo CHtml::link(CHtml::encode($region->name), array('view','name'=>$region->url)); ?>
	</li>
<? endforeach; ?>
</ul>