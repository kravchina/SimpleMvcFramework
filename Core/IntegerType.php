<?php


	/**
	* 
	*/
	final class IntegerType extends FieldType
	{
		
		public function __construct($ErrorMessage, $IsRequire = false, $RequireErrorMessage = "", $RangeMin = false, $RangeMax = false )
		{
			
		}

		public function SetValue($value){
			if(is_int($value))
		}

		public function GetValue(){

		}
	}