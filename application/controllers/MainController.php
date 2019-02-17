<?php 

class MainController 
{
	
	public function actionIndex()
	{
		require 'application/views/index.php';
		return true;
	}
}