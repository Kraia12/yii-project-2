<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',
	'sourceLanguage' => 'es',
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'admin',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
			//	'http://www.<id:\w+>.trabajorecepcionista.com/regiones'=>'countries/regions',
				'contacto' => 'site/contact',
			//	'recursos' => array('site/page','defaultParams' => array('view' => 'learning')),
				'http://www.<id:\w+>.trabajorecepcionista.com/' => 'countries/index',
				'http://www.<id:\w+>.trabajorecepcionista.com/regiones' => 'countries/regions',
				'http://www.<id:\w+>.trabajorecepcionista.com/regiones/<name:\w+>' => 'regions/view',
				''=>'countries/index',
				'regiones' => 'countries/regions',
				'regiones/<name:\w+>' => 'regions/view',
				'regiones/<name:\w+>/<city:\w+>' => 'regions/cities',
				//'<controller:\w+>/<id:\w+>'=>'<controller>/view',
				//'<controller:\w+>/<action:\w+>/<id:\w+>'=>'<controller>/<action>',
				//'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
				
			),
			'showScriptName' =>false,
		),
		// uncomment the following to use a MySQL database
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=gymposium_development',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'admin',
			'charset' => 'utf8',
		),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);