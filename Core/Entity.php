<?php


/**
* 
*/
class Entity
{
	
	function __construct()
	{
		# code...
	}

	protected $data = array();

	final public function __get($name){
		if(!isset($name)){
			throw new Exception("Entity not contains $name element!", 1);			
		}
		return $data[$name]->GetValue();
	}

	final public function __set($name, $value){
		if(!isset($name)){
			throw new Exception("Entity not contains $name element!", 1);			
		}
		$data[$name]->SetValue($value);
	}

	final protected function SetRequire($ErrorMessage){

	}

	final protected function SetInt($ErrorMessage) {

	}

	final protected function SetString($MinLenght, $MaxLenght, $LenghtErrorMessage){

	}

	final protected function SetRegEx($ErrorMessage, $regEx){

	}

	public static Label($propertyName){

	}

	public static ValidationMessage($propertyName) {

	}

	public abstract function IsValid(){

	}



}