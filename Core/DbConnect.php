<?php 


	/**
	* 
	*/
	class DbConnect
	{
		
		private function __construct()
		{

			$this->text = "Create";
		}


		public function Query($query){
			
		}


		private static $dbConnectObject;

		public static function GetInstance(){
		
			if(self::$dbConnectObject !== null){
				return self::$dbConnectObject;
			} else {
				self::$dbConnectObject = new DbConnect();
				return self::$dbConnectObject;
			}


		}
	}