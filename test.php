<?php

	
	$test[] = "1";
	$test[] = "2";
	$test[] = "3";
	$test[] = "4";

	unset($test[2]);

	echo "<pre>";

	print_r($test);

?>