<?php
	header('Content-type: text/html; charset=utf-8');
	require_once 'mallardduck.php';
	require_once 'readheadduck.php';
	require_once 'rubberduck.php';
	require_once 'decoyduck.php';
	require_once 'reactduck.php';
	require_once 'Duck.php';


	$duck1 = new MallardDuck();
	$duck1->display();
	$duck1->performFly();
	$duck1->performQuack();
	$duck1->swim();

	echo "<br>";
	echo "<br>";
	$duck2 = new ReadheadDuck();
	$duck2->display();
	$duck2->performFly();
	$duck2->performQuack();
	$duck2->swim();

	echo "<br>";
	echo "<br>";
	$duck3 = new RubberDuck();
	$duck3->display();
	$duck3->performFly();
	$duck3->performQuack();
	$duck3->swim();

	echo "<br>";
	echo "<br>";
	$duck4 = new DecoyDuck();
	$duck4->display();
	$duck4->performFly();
	$duck4->performQuack();
	$duck4->swim();

	echo "<br>";
	echo "<br>";
public class MiniDuckSimulator{


	Duck mallard = new ModelDuck(); 
	mallard.performQuack();
	mallard.performFly();

	Duck model = new ModelDuck(); 
	model.performFly();
	model.setFlyBehavior(new FlyRocketPower());
	model.performFly();
}
?>