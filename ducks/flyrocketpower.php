<?php
require_once 'flybehavior.php';

class FlyRocketPower implements FlyBehavior{
	public function fly(){
		echo 'WRRRRRRRRRRRRRRRRRRRRRRRUM im flying with a rocket<br>';
	}
}
?>