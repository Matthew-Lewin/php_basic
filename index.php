<?php

require "bootstrap.php";

// Classes - think nouns: task, user, comment, etc.

$pdo		= Connection::make($db, $db_user, $db_password);

$query	= new QueryBuilder($pdo);

$tasks	= $query->selectAll('tasks');

require "index.view.php";
