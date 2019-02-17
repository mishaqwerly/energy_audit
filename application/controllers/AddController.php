<?php 


class AddController 
{
	
	public function actionNewObject()
	{
		require 'application/models/Add.php';
		$AddModelObj = new AddModel();
		$AddModelObj->run();
		require 'application/views/add.php';
		return true;
	}
}