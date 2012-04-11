<?php


	/**
	* 
	*/
	class ViewResult extends ControllerResult
	{
		
		private $ViewName;

		private $DirectoryName;

		private $ViewData;

		private $content;

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

			$this->content = ob_get_contents();

			ob_end_clean();

			extract($this->ViewData);

			// Проверяем, задано ли имя файла шаблона.
			// Если не задано, то выводим напрямую данные из вида
			if(isset($TemplateName)){
				// Проверяем на существание файла шаблона
				if(!file_exists(APPPATH . "View/_Templates/" .  $TemplateName . VIEWEXT)){
					throw new Exception("Template $TemplateName file not found!", 1);					
				}

				require(APPPATH . "View/_Templates/" .  $TemplateName . VIEWEXT);


			} else {
				echo $this->content;
			}			
		}

		/*
		* Метод, вызываемый в главном шаблоне, для вывода нужного "Вида"
		* При вызове в виде ничего не произойдеть, т.к. буфер в этот момент пуст
		*/
		private function RenderBody(){
			echo $this->content;
		}
	}