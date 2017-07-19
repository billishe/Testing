<?php
use PHPUnit\Framework\TestCase;
require "controller.php";

/**
* 
*/
class TestChat extends TestCase
{
	
	function testChatWorks(){
		$employee = new Employee("yyy","","","","");
		$employee2 = new Employee("zzz","","","","");
		$newChat = new Chat($employee->name,$employee2->name);
		
		$expected = "sent";
		$result = $newChat->message($message);
		$this->assertEquals($expected ,$result);
	}

}



?>