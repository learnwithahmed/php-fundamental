## What is Procedural Programming ( inline programming )
an programming paradigm (style of programming, a way of thinking about software construction) that takes a more top down approach to programming. It means `a set of procedures`

## Real-world Example
say we want to build an online inventory system, and your boss tells you to program two similar but seperate forms for a website. Well, to create those forms we need the followings:
 - **Car Form**
  - information needed: `Color, Engine size, Transmission type, Number of doors`
 - **Truck Form**
  - information needed: `Color, Engine size, Transmission type, Cab Size, Towing Capacity`

you: fine thats done 😏

Suppose we want to add a **Bus Form** that records the following information: 
  - `Color, Engine size, Transmission type, Number of Passengers` 🙄

To add that form using `Procedural style`
  - We need to recreate the entire form, repeating the code for color, engine size, and transmission type.
To add that form using `OOP style`
  - it's simple, we just extend the vehicle class with a buss class and then add the `method`, and `numberOfPassenger` property 😎

## Why not PP 
Procedural code is not `wrong`, there is just a tendency for it to lead to code that is difficult to test and difficult to maintain and the developer must edit every line of code that corresponds to the original change in the code. But some great applications have been written procedurally, and it can be an acceptable choice, especially if you don't need to collaborate with anyone else. Better to write good procedural code than bad object oriented code!

## What is OOP (Object Oriented Programming)
Object-oriented programming is a style of coding that is based on the concept of classes and objects that allows developers to group similar tasks into classes. This helps keep code following the tenet "don't repeat yourself" (DRY) and easy-to-maintain.

## Why OOP?
 - Most of Web Frameworks are using OOP
 - It makes it easy to maintain and modify existing code as new objects are created inheriting characteristics from existing ones
 - The ease of development and ability for other developers to understand the program after development.

# Things you need to know before jumping into OPP

**Class**
A class is a self-contained , independent collection of variables and functions which work together to perform one or more specific tasks. Think of a class as a `template or blueprint ` It defines the shape of the object (Car, House, Machine) on paper, with relationships between the different parts of the house clearly defined and planned out, even though the house doesn't exist.

To create a class, we declare it using the `class` keyword, followed by the `name of the class`

```php
	class House
	{
    // properties and methods go here
  }
```

**Object** 
is the actual (Car, Machine, House) which is built based on that blueprint (Class)

**Instance**
To create a new Object we need to an instance of the class (instantiate it) using `new` keyword

```php
  $houseObj = new House;
```
keep in mind, Objects are :
	* instantiated (created ) by using the `new` operator
	* defined by classes but do not exist until instantiated
	* each object is a unique and independent. 
	* have properties and method that can perform behaviors

**Properties**
In order to add a data into a `class`, we need variables inside the class and thats called `properties` class-specific variables. 
These `properties` can only be accessed using the object

To add a new property to a class
```php
    class House
    {
      public $totalRooms = 10; // public here determines the visibility of the property
    }

    // To access that property of house
    $houseObj = new House;
    echo $houseObj->totalRooms;
```

**Methods**
A behaviour or `class-specific functions` associated with an object, May accept input and my provide output. ex: `ring a door bell`. To create `set and get` methods that can `call/update` the value of the class property `$totalRooms`: 

```php
    class House
    {
      // class-specific properties
			public $totalRooms = 10; // public here determines the visibility of the property
			public $totalWindow = 4;

      //class-specific functions
      public function setTotalRooms($newTotalRooms)
      {
        $this->totalRooms = $newTotalRooms;
      }

      public function getTotalRooms()
      {
        return $this->totalRooms; // $this referes to class House
      }

    $houseObj = new House;
    // we can call those methods like we call properties
    echo $houseObj->getTotalRoomsProperty(); // output: 10
    // In order to update the total rooms we need to call setProperty and pass new value
    $houseObj->setTotalRoomsProperty(30);
		echo $houseObj->setTotalRoomsProperty(); // Show the new value ;)
		}
```
With OOP style we can use multiple instances of the same class."
```php
    class House
    {
      // class-specific properties
      public $totalRooms = 10; // public here determines the visibility of the property

      //class-specific functions
      public function setTotalRoomsProperty($newTotalRooms)
      {
        $this->totalRooms = $newTotalRooms;
      }

      public function getTotalRoomsProperty()
      {
        return $this->totalRooms;
      }

    $houseObj1 = new House;
    $houseObj2 = new House;

    echo $houseObj1->getTotalRoomsProperty();

    $houseObj2->setTotalRoomsProperty(5);
    echo $houseObj2->getTotalRoomsProperty();
```

## Magic methods (special methods)
They are set of useful methods provided by PHP (in other languages as well) which make the use of objects easier

**Constructors and Destructors**
  - `__construct()`
    it fires as soon as our object is instantiated, it's really useful to set things up when our object is created.
  - `__destruct()`
    it fires when our object is destroyed, which is useful for class cleanup (closing a database connection, for instance).

```php
  class House 
  {
    public function __construct()
    {
      echo 'The class "', __CLASS__, '" was initiated!<br />'; // __CLASS__ magic constant.
    }

    public function __destruct()
    {
        echo 'The class "', __CLASS__, '" was destroyed.<br />';
		}
	}
```
if we want to explicitly trigger the destructor with specific object, we can use `unset()`
```php
	// Create a new object
	$objHouse = new House;

	// Get the value of $prop1
	echo $objHouse->getTotalRoomsProperty();

	// Destroy the object
	unset($objHouse);

	// Output a message at the end of the file
	echo "End of file.<br />";
```

- `__toString()`
	this method is used in order to avoid error if a script attempts to output MyClass as a string

```php
	public function __toString()
  {
		echo "Using the toString method: ";
		return $this->getTotalRoomsProperty();
	}
```
To check other magic methods, you can find it here [Magic Methods](http://php.net/manual/en/language.oop5.magic.php)

## Class Inheritance (inherit the methods and properties of another classes)
one of the most powerful reason behind OPP is that,  we can use other class's methods and properties by using the `extends` keyword. 

```php
		// say we have a class called Person, 
		class Person
		{
			public $name;
			protected $gender;
			private $age;

			//Public setter and getter method
			public function setName($name)
			{
				$this->name = $name;
			}

			public function getName()
			{
				return $this->name;
			}

			protected function hello()
			{
				return "beep! I am a <i>" . $this->name . "</i><br />";
			}
		}
		//then we require/include it inside our new Nael class

		class Nael extends Person
		{
				/*
				Since Nael class extends Person class this means that class Nael is a child class and class person is the parent class
				*/

				/*So class Nael will inherit all public and protected members(properties and methods) from the parent class*/

				//public $name;
				//protected $age;
				//setName()
				//getName()
				/*
				hello() since is method is protected you can only call it inside 
				child class but you can't call it directly from outside child/parent class (means when you make a new object) as you see example below here we can accessing a protected method from Parent Class which is fine ;)
				*/
				public function showHelloMessage()
				{
					return $this->hello()
				}
				//but it will not inherit the private members 
				//this is all what Object inheritance means
		}
			// Create a new object from Square class
			$objTom = new Tom;

			// Set object properties values
			$objTom->setName('Ahmed');
			echo $objTom->getName();
?>
```

## Controlling the Visibility of Properties and Methods

- `public` - default visibility
	any property or method can be accessed within the class and outside
- 
-	`protected`
	any property or method can only be accessed from within the class itself or in child or inherited classes i.e. if you try to access `hello()` function directly from outside the class, you get a `Fatal error: Call to protected method`

```php
		// Create a new object
	$objTom = new Tom;
	
	// Attempt to call a protected method, which will not work as mentioned above
	echo $objTom->hello();
	// But we can do this ;)
	echo $objTom->showHelloMessage();
```

To avoid this error, create a new method in `Tom` class to call the protected `hello()` method:

	```php
		public function callProtectedHello()
		{
				return $this->hello();
		}
	```

- `private`
	any property or method can only be accessible from within the class that defines it.

## Static Properties and Methods
like visibility, we can declare properties and methods as `static`, later we can access them without needing an `instantiation of the class`. To access a `Static properties and methods` we can use the scope resolution operator `::` i.e. 
`ClassName::$property` and `ClassName::method().`

```php
<?php
	// Class definition
	class Person
	{
			// Declare a static property
			public static $name = "Ahmed";
			
			// Declare a static method
			public static function sayHello(){
					echo self::'Hello' . $greeting;
			}
	}
	// To access static property and method directly
	echo Person::$greeting; // Output: Ahmed
	Person::sayHello(); // Output: Hello Ahmed
	?>
```

