<?php

	/**
	* 
	*/
	abstract class Controller 
	{
		// Контейнер для передачи данных в вид
		protected $ViewData = array();

		// Имя Action, который выполниться в RunAction
		private $runActionName;

		// Имя метода, который выполниться в RunAction
		private $runMethodName;

		private function __construct($actionName)
		{
			// Проверка, существует ли в создаваемом классе указанный Action
			if(!method_exists($this, $actionName . "Action")){
				throw new Exception("Action $actionName in " . get_class($this) . " not found!", 404);
			}

			$this->runActionName = $actionName;

			$this->runMethodName = $actionName . "Action";
		}

		public function RunAction( $args = array()){
			
			$this->Init();
			
			$result = call_user_func(array($this, $this->runMethodName), $args);
			
			$result->SetController(get_class($this), $this->runActionName);

			$result->AssingViewData($this->ViewData);
			
			return $result;
		}

		/*
		* Метод инициализации класса наследника
		* В нем необходимо релизовывать загрузку классов моделей, ресурсов и т.д.
		* т.к. данный методы вызываеться непосредственно перед выполнением выбранного Action в  RunAction
		*/
		abstract protected function Init();

		public static function CreateController($router){

			// Проверяем наличие файла с нужным контроллером
			if(!file_exists(APPPATH . "Controller/" . $router->controller . ".php")){
				throw new Exception("Controller file $router->controller not found!", 404);
			}

			// Если сущесвует - подключаем
			include(APPPATH . "Controller/" . $router->controller . ".php");

			// Проверяем, есть необходимый нам класс контроллера
			if(!class_exists( $router->controller . "Controller")){
				throw new Exception("Controller class {$router->controller}Controller not found!", 404);
			}
			
			$className = $router->controller . "Controller";

			return new $className($router->action, $router->argsArray);
		}

		
		
	}



?>