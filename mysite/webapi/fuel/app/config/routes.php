<?php
return array(
	'_root_'  => 'welcome/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
	
	'memo/read' => 'memo/read',
	'memo/read_backend' => 'memo/read_backend',
	'memo/write' => 'memo/write',
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);
