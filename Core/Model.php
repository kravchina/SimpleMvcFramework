<?php


	/**
	* 
	*/
	class Model
	{
		
		private $connect;

		function __construct()
		{
			$this->connect = DbConnect::GetInstance();

		}
	}