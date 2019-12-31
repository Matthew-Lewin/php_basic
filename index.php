<?php


// Classes - think nouns: task, user, comment, etc.
$query	= require "bootstrap.php";

$tasks	= $query->selectAll('tasks'); 

require "index.view.php";
