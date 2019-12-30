<?php

class Connection {
	public static function make($db, $db_user, $db_password) {
		try {
			return new PDO($db, $db_user, $db_password);
	} catch (PDOException $e) {
			die($e->getMessage());
		};
	}
}
