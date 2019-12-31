<?php

require 'Task.php';
require 'db.php';
require "functions.php";
require "database/Connection.php";
require "database/QueryBuilder.php";

$pdo		= Connection::make($db, $db_user, $db_password);


return new QueryBuilder($pdo);
