<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Sistema de Apoyo de Evaluación de Proyectos Informáticos',
	'aliases' => array(
	    'bootstrap' => 'ext.bootstrap',
	),
	// preloading 'log' component
	// 'preload'=>array('log'),

   	'theme'=>'principal',
	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		// Accesos a Bootstrap
		'bootstrap.behaviors.*',
		'bootstrap.helpers.*',
		'bootstrap.widgets.*'
	),

	'modules'=>array(
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'123456',
			// Extencions de Bootstrap
			'generatorPaths' => array('bootstrap.gii'),
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// Limpia URL
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		/*
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=testdrive',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		*/
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		// 'log'=>array(
		// 	'class'=>'CLogRouter',
		// 	'routes'=>array(
		// 		array(
		// 			'class'=>'CFileLogRoute',
		// 			'levels'=>'error, warning',
		// 		),
		// 		// uncomment the following to show log messages on web pages
		// 		/*
		// 		array(
		// 			'class'=>'CWebLogRoute',
		// 		),
		// 		*/
		// 	),
		// ),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);