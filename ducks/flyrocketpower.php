<?php
require_once 'flybehavior.php';

class FlyRocketPowered implements FlyBehavior{
	public function fly(){
		echo 'WRRRRRRRRRRRRRRRRRRRRRRRUM im flying with a rocket<br>';
	}
}
?>