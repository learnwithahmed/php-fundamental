<?php

// In this example we have a Parent Class called Vehicle
class Vehicle
{
	public $color;
	public $engineSize;
	public $transmissionType;

	public function displayHello()
	{
		return 'Hello';
	}
}

/* 
	Here we have a Car class extending Parent class (inherits parent class), 
	means we can access all public and protected methods here
*/
class Car extends Vehicle
{
	public $numberOfDoor;
	
	public function setColor($color)
	{
		$this->color = $color;
	}

	public function getColor()
	{
		return $this->color .'<br>';
	}
}

// each new object is a unique and independent. 
$carObj = new Car;
$carObj->setColor('Red');
echo $carObj->getColor();

$carObj2 = new Car;
$carObj2->setColor('Black');
echo $carObj2->getColor();









// class Person
// 		{
// 			public $name;
// 			protected $gender;
// 			private $age;

// 			//Public setter method
// 			public function setName($name)
// 			{
// 				$this->name = $name;
//       }
      
//       public function getName()
// 			{
// 				return $this->name;
// 			}

// 			public function hello()
// 			{
// 				return "beep! I am a <i>" . $this->name . "</i><br />";
// 			}
// 		}
// 		//then we require/include it inside our new Tom class

// 		class Tom extends Person
// 		{

// 		}

// 			// Create a new object from Square class
// 			$objTom = new Tom;

// 			// Set object properties values
// 			$objTom->setName('Ahmed');
// 			echo $objTom->getName();