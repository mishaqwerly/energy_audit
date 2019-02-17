<?php 

ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'application/core/Router.php';
require 'application/lib/Db.php';


$objRouter = new Router();
$objRouter->run();

