<?php

return array(
	'modules' => array(
		'Core',
		'Cms', 
		'Blog',
		'Gallery'
	),
	'module_listener_options' => array(
		'module_paths' => array(
			'./module'
		),
		'config_glob_paths' => array(
			'config/autoload/{{,*.}global,{,*.}local}.php',
		),
	),
);
