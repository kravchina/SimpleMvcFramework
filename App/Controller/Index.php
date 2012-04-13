<?php


	/**
	* 
	*/
	class IndexController extends Controller
	{
		function Init(){
			$this->LoadModel("Test");
		}
		
		function IndexAction(){
			
			echo $this->Test->GetTest();

			$this->ViewData["title"] = "Hello view!";

			return new ViewResult();
		}
	}

