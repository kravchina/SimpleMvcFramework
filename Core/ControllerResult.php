<?php 


	/**
	* 
	*/
	abstract class ControllerResult
	{
		
		abstract public function __construct();

		abstract public function SetController($name, $action);

		abstract public function AssingViewData($ViewData);

		abstract public function Render();

	}

