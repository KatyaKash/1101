<?php
	header('Content-type: text/html; charset=utf-8');
	require_once 'mallardduck.php';
	require_once 'readheadduck.php';
	require_once 'rubberduck.php';
	require_once 'decoyduck.php';
	require_once 'modelduck.php';


	$duck1 = new MallardDuck();
	$duck1->display();
	$duck1->performFly();
	$duck1->performQuack();
	$duck1->swim();

	echo "<br>";
	$duck2 = new ReadheadDuck();
	$duck2->display();
	$duck2->performFly();
	$duck2->performQuack();
	$duck2->swim();

	echo "<br>";
	$duck3 = new RubberDuck();
	$duck3->display();
	$duck3->performFly();
	$duck3->performQuack();
	$duck3->swim();

	echo "<br>";
	$duck4 = new DecoyDuck();
	$duck4->display();
	$duck4->performFly();
	$duck4->performQuack();
	$duck4->swim();

	echo "<br>";
	echo "<br>";
	echo "<h3>щас будут фокусы<br>";

	$duck5 = new ModelDuck;
	$duck5->display();
	$duck5->performQuack();
	$duck5->swim();
	$duck5->performFly();
	echo "<br>";
	$duck5->setFlyBehavior(new FlyRocketPowered());
	$duck5->performFly();
	$duck5->setFlyBehavior(new FlyNoWay());
	$duck5->performFly();
	$duck5->setFlyBehavior(new FlyWithWings());
	$duck5->performFly();
	echo "<br>";
	$duck5->setQuackBehavior(new MuteQuack());
	$duck5->performQuack();
	$duck5->setQuackBehavior(new Quack());
	$duck5->performQuack();
	$duck5->setQuackBehavior(new Squeak());
	$duck5->performQuack();


?>