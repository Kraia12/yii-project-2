<ul class="view">
<?php foreach($data->cities as $city): ?>
	<li>
	<?php echo CHtml::link(CHtml::encode($city->name), array('cities/view','city'=>$city->url,'region'=>$data->url)); ?>
	</li>
<? endforeach; ?>
</ul>