<?php
/* @var $this CitiesController */
/* @var $data Cities */
?>


<ul class="news">
    <li><?php echo CHtml::link(ucwords(strtolower($data->jobtitle)),$data->url,array('onclick'=>$data->onmousedown)); ?><?php if(trim($data->company) !== ''){?> en <?php echo ucwords(strtolower($data->company));} ?>
    </li>
    <li><?php echo ucfirst((strtolower($data->snippet))); ?>
    	 <br />Localización : <?php echo ucwords(strtolower($data->formattedLocation)); ?>
    </li>
</ul>