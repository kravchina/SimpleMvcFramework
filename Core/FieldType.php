<?php


	/**
	* 
	*/
	abstact class FieldType
	{
		
		function __construct()
		{
			# code...
		}


		abstract public function GetValue();

		abstract public function SetValue($value);

		abstract public function Label();

		abstract public function ValidationMessage();
	}