<?php 

require_once("vendor/autoload.php");

$app = new Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$Sql = new Hcode\DB\Sql();

	$result = $Sql->select("SELECT * fROM tb_users");

	echo json_encode($result);

});

$app->run();

 ?>