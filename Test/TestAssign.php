<?php
use PHPUnit\Framework\TestCase;
require "controller.php";

/**
* 
*/
class TestAssign extends TestCase
{
	
	function testassignTaskWorks(){
		$employee = new Employee("yyy","","","","");
		$manager = new Manager("xxx", "","","","");

		$expected = "The task is successfully assigned to ".$employee->username."!";
		$result = $manager->assign($employee->username, "do that!");
		$this->assertEquals($expected ,$result);
	}
}



?>