<?php

class PageController extends Controller
{
	public function actionDathang()
	{
		$this->render('dathang');
	}

	public function actionHotro()
	{
		$this->render('hotro');
	}

	public function actionDaily()
	{
		$this->render('daily');
	}

	public function actionLienhe()
	{
		$this->render('lienhe');
	}

	public function actionIndex()
	{
		$this->render('index');
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