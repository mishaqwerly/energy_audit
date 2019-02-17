<?php 

/**
 * 
 */
class Db 
{
	public static function getConnect()
	{
		require 'application/config/db.php';
		return $dbh = new PDO('mysql:host='.$dbParams['host'].';dbname='.$dbParams['dbname'].'', $dbParams['user'], $dbParams['pass']);
	}
	
}


