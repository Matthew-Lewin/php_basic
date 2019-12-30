<?php

function dd ($data) {
	echo '<pre>';
	die(var_dump($data));
	echo '</pre>';
}

function connectToDB($db, $db_user, $db_password) {
	try {
		return new PDO($db, $db_user, $db_password);
	} catch (PDOExceptiopn $e) {
		die('Could not connect');
	};

}

function fetchAllTasks($pdo) {
	$statement	= $pdo->prepare('select * from tasks');
	$statement->execute();
	return $statement->fetchAll(PDO::FETCH_OBJ);
}
