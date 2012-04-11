<?php


	/**
	* 
	*/
	class TestController extends Controller
	{
		function Init(){
			
		}
		
		function TestAction(){
			
			$this->ViewData["title"] = "Hello view!";

			return new ViewResult();
		}
	}

