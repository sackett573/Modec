<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return array(
	'db' => array(
		'driver' => 'Pdo_Mysql',
	),
	'service_manager' => array(
		'aliases' => array(
			'Zend\Db\Adapter\Adapter' => 'DbAdapter',
		),
		'factories' => array(
			'DbAdapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
		),
	),
);
