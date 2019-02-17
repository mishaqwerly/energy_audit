<?php 


class ListController 
{
	
	public function actionAllObject()
	{
		require 'application/models/List.php';
		$listModelObj = new ListModel();
		$newsList = $listModelObj->getAll();

		$listModelObj->deleteObject();
		require 'application/views/list.php';
		return true;
	}
}