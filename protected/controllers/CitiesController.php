<?php

class CitiesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column1';



	public function actionView($id,$region,$city,$page=0)
	{
	    $feed = new IndeedFeed;
	    $start = 0;
	    if($page > 0){
	            $start = ($page * 10) -10;
	    }
	    $jobs = $feed->getFeed($start,$id,$city,$region);
	    $total = $jobs['total_results'];
	    array_splice($jobs,0,1);
	    $this->render('view',array(
	                    'jobs' => $jobs,
	                    'total' => $total,
	                    'region' => $region,
	                    'city' => $city,
	            ));
	}

	public function loadModel($id)
	{
		$model=Cities::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}


	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='cities-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
