<?php
	header('Content-type: text/html; charset=utf-8');
	require_once 'programmer.php';
	
	$p1 = new Programmer('Иван', 'Иванвов', 'Иванович');
	$p1->addLang('C++');
	$p1->addLang('php');
	$p1->addLang('js');

	$p1->display();
?>