<?php

	
	$connId = mysql_connect("localhost", "root", "");

	mysql_select_db("test", $connId);

	mysql_query("set names 'utf8'", $connId);


	for ($i=0; $i < 40000; $i++) { 
		mysql_query("INSERT INTO `rel`(`user_id`, `group_id`) VALUES ('$i', '1')", $connId);
	
	}

	echo mysql_error();

	for ($i=0; $i < 100000; $i++) { 
		mysql_query("INSERT INTO `rel`(`user_id`, `group_id`) VALUES ('$i', '2')", $connId);
		
	}

	echo mysql_error();
?>