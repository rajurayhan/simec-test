<?php

	include "custom.class.php";

	// Part One
	
	$cObj = new Custom();

	echo 'Part One: <br>';

	$cObj->showTable();	

	echo '<br>Part Two: <br>';

	// Part Two

	$object 	= new Custom();	

	$object->offsetSet('name', 'Sample Name');
	$object->offsetSet('mobile', '01849699001');
	$object->offsetSet('email', 'devraju.bd@gmail.com');

	$object->showTable();	
?>
