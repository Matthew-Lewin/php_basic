<?php


// Classes - think nouns: task, user, comment, etc.

class Task {
	public $description;
	public $completed = false;

	public function __construct($description) {
		// Triggered when you use new keyword
		// An instance of a class is an object
		$this->description	= $description;
	}
	public function isComplete() {
		$this->completed	= true;
	}
}

$tasks	= [
	new Task('Go to the store'),
	new Task('Cook dinner'),
	new Task('Practice PHP')
]; 

$tasks[0]->isComplete();

require "index.view.php";
require "functions.php";
?>
