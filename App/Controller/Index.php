<?php


	/**
	* 
	*/
	class IndexController extends Controller
	{
		function Init(){
			
		}
		
		function IndexAction(){
			
			$this->ViewData["title"] = "Hello view!";

			return new ViewResult();
		}
	}

