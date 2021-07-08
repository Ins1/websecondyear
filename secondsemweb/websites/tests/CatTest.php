<?php 
	class CatTest extends \PHPUnit\Framework\TestCase
	{
		function testWithoutCategoryName(){
			$rowVal = [
				'name' => ''
			];
			$isValid = testAddCat($rowVal);
			$this->assertFalse($isValid);
		}
		function testValidCategory(){
			$rowVal = [
				'name' => 'Cats'
			];
			$isValid = testAddCat($rowVal);
			$this->assertTrue($isValid);
		}
	}
?>