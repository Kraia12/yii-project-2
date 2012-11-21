<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<h1>Trabajos recientes</h1>
<p>Selecciona tu <?php echo CHtml::link("Estado",array('countries/regions'),array('target'=>'_blank')); ?> y despues tu ciudad para ver los trabajos en tu localidad</p>
<?php

include_once 'ArrayDataProvider.php';
?>
<article class="col-1 box latest-news">
	    <div class="left-top-corner maxheight">
        	<div class="right-top-corner maxheight">
        	    <div class="inner">
                	<h2><span>Ultimos</span> Trabajos</h2>
<?php
$viewData['dataProvider'] = new ArrayDataProvider(
                        $jobs,
                        array(
                                'totalItemCount' => $total,
                                'pagination'=>array(
                                        'pageSize' => 10,
                                ),
                        )
                );
$this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$viewData['dataProvider'],
    'itemView'=>'/cities/_view',
));
?>
				</div>
			</div>
		</div>
</article>