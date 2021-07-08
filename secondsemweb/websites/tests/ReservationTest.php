<?php 
	class ReservationTest extends \PHPUnit\Framework\TestCase
	{

		function testAllEmpty(){
			$rowValues = [
				'name' => '',
				'email' => '',
				'noofguests' => '',
				'datetime' => '',
			];
			$isValid = testReservation($rowValues);
			$this->assertFalse($isValid);
		}

		function testInvalidFullname(){
			$rowValues = [
				'name' => '',
				'email' => 'testing@gm.com',
				'noofguests' => '12345678',
				'datetime' => 'test',
			];
			$isValid = testReservation($rowValues);
			$this->assertFalse($isValid);
		}
		function testInvalidEmail(){
			$rowValues = [
				'name' => 'testing',
				'email' => '',
				'noofguests' => '12345678',
				'datetime' => 'test',
			];
			$isValid = testReservation($rowValues);
			$this->assertFalse($isValid);
		}
		function testInvalidNoOfGuests(){
			$rowValues = [
				'name' => 'testing',
				'email' => 'testing@gm.com',
				'noofguests' => '',
				'datetime' => 'test',
			];
			$isValid = testReservation($rowValues);
			$this->assertFalse($isValid);
		}
		function testInvalidDatetime(){
			$rowValues = [
				'name' => 'text',
				'email' => 'testing@gm.com',
				'noofguests' => '12345678',
				'datetime' => '',
			];
			$isValid = testReservation($rowValues);
			$this->assertFalse($isValid);
		}
		function testInvalidAll(){
			$rowValues = [
				'name' => 'text',
				'email' => 'testing@gm.com',
				'noofguests' => '12345678',
				'datetime' => '2000-02-02 02:00:00',
			];
			$isValid = testReservation($rowValues);
			$this->assertTrue($isValid);
		}
	}
?>