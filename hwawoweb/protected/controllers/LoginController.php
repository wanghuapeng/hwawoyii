<?php

class LoginController extends Controller
{
    public $layout = "column2";

    public $layoutTitle = "视频监控系统登录";

	public function actionIndex()
	{
        if(Yii::app()->request->isPostRequest)
        {
            //$this->render('//site/main');
            $this->redirect(array('site/main'));
        }
        else
        {
            $this->render('index');
        }

	}

    public function actionRegister()
    {
        $this->render('register');
    }

    public function actionUserDetail()
    {

    }

	// -----------------------------------------------------------
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}