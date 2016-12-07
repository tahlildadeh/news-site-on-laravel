<?php

require(__DIR__ . '/../bootstrap.php');
App::run();

//$model = new Core_DB_MySql();
// $model = new Core_DB_Postgres();
/*
$model = new Core\DB\Mysql();

$model->connect();
*/


$model = new \Core\Query\Mysql\Builder();

$model->query('Select * from `users`;');
//$model->test();

$cont = new \App\Controller\UserController();



