<?php
return array(
	'_root_'  => 'welcome/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
	
        'memo/read' => 'memo/read',
        'memo/write' => 'memo/write',
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);
