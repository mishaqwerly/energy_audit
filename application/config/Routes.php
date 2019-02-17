<?php 

return $routes = array(

	'info/([0-9]+)' => 'info/infoObject/$1',
	'last' => 'info/lastObject', 
	'list' => 'list/allObject', 
	'add' => 'add/newObject', 
	'' => 'main/index', 

);



