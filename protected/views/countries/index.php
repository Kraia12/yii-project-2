<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<h1>Trabajos En <?php echo $country->name ?></h1>
<p>Selecciona tu <?php echo CHtml::link("Region / Estado",array('countries/regions'),array('target'=>'_blank')); ?> y despues tu ciudad para ver los trabajos en tu localidad</p>
<?php
include_once 'ArrayDataProvider.php';
?>
<article class="col-1 box latest-news">
	    <div class="left-top-corner maxheight">
        	<div class="right-top-corner maxheight">
        	    <div class="inner">
                	<h2><span>Trabajos</span> Recientes</h2>
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
    'itemView'=>'/cities/_jobView',
    'separator' => '<hr />',
    'afterAjaxUpdate' => 'function(){
$("html, body").animate({scrollTop: $("#banner-top").position().top }, 500);}'
));
?>
				</div>
			</div>
		</div>
</article>