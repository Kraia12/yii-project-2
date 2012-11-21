<?php

class CountriesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column1';

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionRegions($id='mx')
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex($page=0,$id='mx')
	{
                // renders the view file 'protected/views/site/index.php'
                // using the default layout 'protected/views/layouts/main.php'
                $country = $this->loadModel($id);
                $feed = new IndeedFeed;
                $start = 0;
                if($page > 0){
                        $start = ($page * 10) -10;
                }
                $jobs = $feed->getFeed($start,$id);
                $total = 200;
                array_splice($jobs,0,1);
                $this->render('index',array(
                                'jobs' => $jobs,
                                'total' => $total,
                                'country' => $country,
                        ));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Countries::model()->with('regions')->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

}
