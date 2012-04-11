<?php

	/*
	* 	Режим работы приложения. Влияет на режим вывода отладочных сообщений
	*	Может принимать следующие занчения:
	*		- debug 	- выводяться все ошибки (error_reporting(E_ALL);)
	*		- release 	- ничего не выводиться (error_reporting(0);)
	*
	*	При неправильном значении автоматически устанавливаеться режим release
	*/
	define('APP_MODE', 'debug');


	$systempath = str_replace("\\", "/", dirname(__FILE__)) . "/" ;

	define('ROOTPATH', 	$systempath);

	// Путь к папке с ядром фреймворка
	define('COREPATH', 	$systempath . "Core/");

	// Путь к папке с пользовательским кодом
	define('APPPATH', 	$systempath . "App/" );

	// Путь к папке с кешем
	define('CACHEPATH', $systempath . "Cache/" );

	// Расширение файлов шаблонов вида
	define('VIEWEXT', 	".php" );


	require_once( COREPATH . "Core.php");



	$core = new Core();

	$core->Run();

