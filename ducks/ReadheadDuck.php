<?php
require_once 'duck.php';
require_once 'flywithwings.php';
require_once 'quak.php';

class ReadheadDuck extends Duck {
	public function __construct(){
		$this->flyBehavior = new FlyWithWings();
		$this->quackBehavior = new Quack();
	}
	public function display(){
		echo 'Я не кряква<br>';
	}
}
?>