<?php  

class ListModel 
{
	
	public function getAll()
	{
		$db = Db::getConnect();
		$result = $db->query('SELECT * From object');
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$newsList = $result->fetchall();
		return $newsList;
	}

	public function deleteObject()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			$id = $_POST['submit'];
			$db = Db::getConnect();
			$heating = $db->prepare("DELETE FROM `object` WHERE `object`.`id` = $id");
			$heating->execute();
			header('Location: /list');
		}
	}

}