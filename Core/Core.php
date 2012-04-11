<?php 

	/**
	* 
	*/
	class Core
	{

		function __construct()
		{
			function __autoload($classname){
             	require_once COREPATH . $classname . '.php';
         	}
		}

		public function Run(){
				

				$router 	= Router::CreateRouter();

				$controller = Controller::CreateController($router);

				$result 	= $controller->RunAction($router->argsArray);

				$result->Render();

		}

		
	}

