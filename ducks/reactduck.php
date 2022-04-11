<?php
require_once 'duck.php';
require_once 'flywithreactor.php';
require_once 'quak.php';

class ReactDuck extends Duck {
	public function __construct(){
		$this->flyBehavior = new FlyWithReactor();
		$this->quackBehavior = new Quack();
	}
	public function display(){
		echo 'Я кряква<br>';
	}
}
?>