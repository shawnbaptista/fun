<?php

/*
	// Examples of Inheritance in Object-Oriented Programming
	// Source: https://phpenthusiast.com/object-oriented-php-tutorials/inheritance-in-object-oriented-php

	class Parent
	{
		// The code for the Parent's class
	}

	class Child extends Parent
	{
		// The Child class can use the Parent's class code
	}
*/

class Car 
{
	// Private property inside the class
	private $model;

	// Public setter method
	public function setModel($model)
	{
		$this->model = $model;
	}

	public function honk()
	{
		return "Honk honk! I am a " . $this->model . ".";
	}
}

class SportsCar extends Car 
{
	// No code in the child class
}

// Create an instance from the child class
$sportsCar1 = new SportsCar();

// Set the value for the value of the class
$sportsCar1->setModel("Mazda");

// Use another method that the child class inherited from the parent class
echo $sportsCar1->honk();

// $sportsCar1->honk();