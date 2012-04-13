<?php

	
	/**
	* 
	*/
	class A
	{
		
		function __construct($name)
		{
			$this->$name = "Test";
		}
	}

	$a = "A";
	$a = new $a("tt");

	echo $a->tt;
?>