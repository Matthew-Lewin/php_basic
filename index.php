<?php

// Classes - think nouns: task, user, comment, etc.

require 'Task.php';
require 'db.php';
require "functions.php";

$pdo	= connectToDB($db, $db_user, $db_password);
$tasks	= fetchAllTasks($pdo);

require "index.view.php";
