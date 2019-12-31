<?php

require 'Task.php';
$config = require 'config.php';
require "functions.php";
require "database/Connection.php";
require "database/QueryBuilder.php";

$pdo		= Connection::make(
	$config['database']['db'],
	$config['database']['db_user'],
	$config['database']['db_password']
);


return new QueryBuilder($pdo);
