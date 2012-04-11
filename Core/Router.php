<?php

	/**
	* 
	*/
	class Router
	{
		
		public $controller;
		public $action;
		public $argsArray = array();

		function __construct()
		{
			$queryString = $_SERVER["QUERY_STRING"];

			$params = array_filter(explode("/", $queryString), 'strlen'); // разбиваем на массив и удаляем пустые строки 

			// проверяем строку на корректные символы и на количество параметров
			if(	!preg_match("/^[a-zA-Z0-9\/\-\_]+$/", $queryString)
				&& count($params) > 0 )
			{
				throw new Exception("Bad url request: denied chars!", 400);
			}

			$this->controller = $params[0];
			$this->action 	= $params[1];

			unset($params[0]);
			unset($params[1]);

			$this->cargsArray = $params;
		}


		public static function CreateRouter(){
			return new Router();
		}
	}



?>