<?php 
	echo 'Hello world';

	function add($num1,$num2){
		$result = $num1 + $num2;
		return $result;
	}
	$result = add(1,1);
	echo $result;

<<<<<<< HEAD
	class Robot{
		private $name;

		function setName($name){
			$this->name = $name;
		}
		function geetName(){
			return $this->name;
		}
	}

	$robot = new Robot();
	$robot->setName('ドラえもん')
=======
	function minus($num1,$num2){
		$result = $num1 + $num2;
		return $result;
	}
	$result = minus(10,4);
	echo $result;
>>>>>>> minus_function
?>
