<?php 
//test class for cheese 
class Cheese{
	private $id;
	private $cheeseName;
	private $texture;   //boolean hard/soft cheese?
	private $country;   //could be 3 char or a string
	private $strength;  //values from 1-5
	private $price;    //per gram 


//magic (**insert rainbows here) getters and setters 
	function __get($name)
	{
		return $this->$name;
	}

	function __set($name,$value)
	{
		$this->$name=$value;
	}



}
?>