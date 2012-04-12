<?php 


	/**
	* 
	*/
	abstract class ControllerResult
	{
		
		abstract public function __construct();

		/*
		* Перенести реализацию этого метода сюда
		* Также перенести два поля с именем и событием
		*/
		abstract public function SetController($name, $action);

		abstract public function AssingViewData($ViewData);

		abstract public function Render();

	}

