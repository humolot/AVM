<?php
//dependency import
require 'properties.php';
require 'lib/Slim/Slim.php';
require 'security/Security.php';

//init Slim Framework
\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();
$app->add(new \Security($app));
require 'security/Login.php';
require 'security/ManageUser.php';

//resources
	//db AVM_db
		require('./resource/AVM_db/custom/UserCustom.php');
		require('./resource/AVM_db/User.php');
	

$app->run();


?>
