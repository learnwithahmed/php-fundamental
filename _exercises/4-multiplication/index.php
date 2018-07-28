<?php

/**
	* Exercise 4
	*
	* INSTRUCTIONS
	* Write a function that takes 2 values as input and returns the product of them.
	* For example: multiplication(5,4) => output: 20
	*/


//Solution
/*** START Multiplication Function ***/
function multiplication($A, $B) {
	
	try {
		// Validate Input Data
		if (is_null($A) || is_null($B)) {
			throw new Exception('Input Should not be Empty!');
		}elseif (is_string($A) || is_string($B)) {
			throw new Exception('Input Should be Number!');
		}elseif (is_array($A) || is_array($B)) {
			throw new Exception('Input should not be an Array!');
		}
		
		// Stripper Input Data
		$A = Stripper($A);
  		$B = Stripper($B);
  
		//Retun Result
		  $result = $A * $B;
		  if (is_integer($result)) {
			  echo $result;
		  }else {
			throw new Exception('Unknow Error!, Please try again.');
		  }
	    }
			
	catch (Exception $e) {
		echo $e->getMessage();
	}
}
/*** END Multiplication Function ***/



/*** START Stripper Function ***/
function Stripper($data) {
	//Stripe cSlashes
	$data = stripcslashes($data);
	
	//Stripe PHP and HTML tags
	$data = strip_tags($data);

	//Stripe Slashes
	$data = stripslashes($data);
	return $data;
}
/*** END Stripper Function ***/


//Final Result
multiplication(5,5);
