<?php
require_once 'flybehavior.php';
require_once 'quackbehavior.php';

abstract class Duck {
	protected $flyBehavior;
	protected $quackBehavior;

	public void setFlyBehavior(FlyBehavior fb){
		flyBehavior = fb;
	}
	public void setQuackBehavior(QuackBehavior qb){
		quackBehavior = qb;
	}

	abstract public function display();
	public function performFly(){
		$this->flyBehavior->fly();
	}
	public function performQuack(){
		$this->quackBehavior->quack1();
	}
	public function swim(){
		echo 'Все утки плавают, даже деревянные';
	}
}

public class ModelDuck extends Duck{
	public ModelDuck(){
		flyBehavior = new FlyNoWay();
		quackBehavior = new Quack();
	}
	public void display(){
		echo 'im a model duck';
	}
}


?>