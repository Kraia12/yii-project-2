<?php
include_once 'ArrayDataProvider.php';

$this->breadcrumbs=array(
'Regiones' =>array('countries/regions'),
ucwords(str_replace('-',' ',$region))=>array('/regiones/'. $region ),
ucwords(str_replace('-',' ',$city)),
);
?>
<article class="col-1 box latest-news">
	    <div class="left-top-corner maxheight">
        	<div class="right-top-corner maxheight">
        	    <div class="inner">
                	<h2><span>Trabajos</span> de <?php echo $city ?></h2>
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
$("html, body").animate({scrollTop: $(".latest-news").position().top }, 500);}'
));
?>
				</div>
			</div>
		</div>
</article>