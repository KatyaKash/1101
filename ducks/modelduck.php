<?php
require_once 'duck.php';
require_once 'flynoway.php';
require_once 'quak.php';
require_once 'flyrocketpower.php';
require_once 'flynoway.php';
require_once 'flywithwings.php';
require_once 'squeak.php';
require_once 'quak.php';
require_once 'mutequack.php';

class ModelDuck extends Duck{
	public function __construct(){
		$this->flyBehavior = new FlyNoWay();
		$this->quackBehavior = new Quack();
	}
	public function display(){
		echo 'im a model duck<br>';
	}
}
?>