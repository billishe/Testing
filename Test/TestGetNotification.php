<?php
use PHPUnit\Framework\TestCase;
require "controller.php";

class TestGetNotification extends TestCase
{
	
	function testassignTaskWorks(){
		$new = new Notification();
		$manager = new Manager("xxx", "","","","");
		$new->add($this->name,"successful!");



		$expected = "successful!";
		$result = $new->get();
		$this->assertEquals($expected ,$result);
	}
}



?>