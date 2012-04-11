<?php


	/**
	* 
	*/
	class ViewResult extends ControllerResult
	{
		
		private $ViewName;

		private $DirectoryName;

		private $ViewData;

		public function __construct($viewName = "", $directoryName = ""){
			$this->ViewName 		= $viewName;
			$this->DirectoryName 	= $directoryName;
		}

		public function SetController($name, $action){
			if(!strlen($this->ViewName)){
				$this->ViewName = $action;
			}

			if(!strlen($this->DirectoryName)){
				$this->DirectoryName = $name;
			}
		}

		public function AssingViewData($ViewData){
			$this->ViewData = $ViewData;
		}

		public function Render(){
			if(!file_exists(APPPATH . "View/" . $this->DirectoryName . "/" . $this->ViewName . VIEWEXT)){
				throw new Exception("View file $this->ViewName in $this->DirectoryName not found!", 1);
			}

			ob_start();

			extract($this->ViewData);

			include(APPPATH . "View/" . $this->DirectoryName . "/" . $this->ViewName . VIEWEXT);

			$content = ob_get_contents();

			ob_end_clean();

			extract($this->ViewData);

			echo $this->ViewData["title"];

			echo $test;
			echo $content;
		}
	}