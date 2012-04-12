<?php


	/**
	* Класс результата контроллера, который выполняет перенаправления пользователя по указанному адресу
	*/
	class RedirectResult extends ControllerResult
	{

		private $actionName;

		private $controllerName;
		
		public function __construct($actionName, $controllerName) {
			echo $actionName;
			$this->actionName 		= $actionName;
			$this->controllerName 	= $controllerName;
		}

		public function AssingViewData($ViewData){
			// Ничего не надо здесь :)
			// Как вариант, все данные передавать в виде GET запроса, 
			// и/или принимать их в качестве третьего агрумента в коснтрукторе
		}

		public function SetController($name, $action){
			
		}

		public function Render(){

			Header("Location:http://google.com");

		}
	}