<?php


	/**
	* 
	*/
	class RedirectResult extends ControllerResult
	{
		
		public function __construct($viewName = ""){
			echo "!! VIew Name is $viewName";
		}

		public function AssingViewData($ViewData){

		}

		public function Render(){

		}
	}