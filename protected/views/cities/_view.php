<?php
/* @var $this CitiesController */
/* @var $data Cities */
?>


<ul class="news">
    <li><?php echo CHtml::link(ucwords(strtolower($data->jobtitle)),$data->url,array('onclick'=>$data->onmousedown)); ?><?php if($data->company !== '')?> en <?php echo ucwords(strtolower($data->company)); ?>
    </li>
    <li><?php echo ucfirst((strtolower($data->snippet))); ?></li>
</ul>