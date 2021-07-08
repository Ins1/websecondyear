<?php 

	class DishesTest extends  \PHPUnit\Framework\TestCase
	{
		function testAllEmpty(){
			$rowVal = [
				'name' => '',
				'description' => '',
				'price' => ''
			];
			$isValid = testDishes($rowVal);
			$this->assertFalse($isValid);
		}

		function testInvalidName(){
			$rowVal = [
				'name' => '',
				'description' => 'desc',
				'price' => '9898'
				
			];
			$isValid = testDishes($rowVal);
			$this->assertFalse($isValid);
		}
		function testInvalidDescription(){
			$rowVal = [
				'name' => 'dumName',
				'description' => '',
				'price' => '9898'
			];
			$isValid = testDishes($rowVal);
			$this->assertFalse($isValid);
		}
		function testInvalidPrice(){
			$rowVal = [
				'name' => 'dumName',
				'description' => 'desc',
				'price' => ''
			];
			$isValid = testDishes($rowVal);
			$this->assertFalse($isValid);
		}
		
		function testValidAll(){
			$rowVal = [
				'name' => 'dumName',
				'description' => 'desc',
				'price' => '9898'
			];
			$isValid = testDishes($rowVal);
			$this->assertTrue($isValid);
		}
	}
?>