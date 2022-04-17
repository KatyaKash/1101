<?php
require_once 'flybehavior.php';
require_once 'quackbehavior.php';
require_once 'mallardduck.php';

abstract class Duck {
	protected $flyBehavior;
	protected $quackBehavior;

	public function setFlyBehavior($fb){
		$this->flyBehavior = $fb;
	}
	public function setQuackBehavior($qb){
		$this->quackBehavior = $qb;
	}

	abstract public function display();
	public function performFly(){
		$this->flyBehavior->fly();
	}
	public function performQuack(){
		$this->quackBehavior->quack1();
	}
	public function swim(){
		echo 'Все утки плавают, даже деревянные<br>';
	}
}



?>