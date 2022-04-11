<?php
require_once 'flybehavior.php';

class FlyNoWay implements FlyBehavior{
	public function fly(){
		echo 'Я не лечу............<br>';
	}
}
?>