<?php
use PHPUnit\Framework\TestCase;
require "controller.php";

class TestADD extends TestCase
{
	
	function testUsernameIsEmpty(){
		$admin = new Admin("xxx", "","","","");
		
		$expected = "username can't be empty!";
		$result =$admin->addAccount("","1234567890", "position", "type", "mgrName");
		$this->assertEquals($expected ,$result);
	}
	function testPasswordIsEmpty(){
		$admin = new Admin("xxx", "","","","");
		
		$expected = "password can't be empty!";
		$result =$admin->addAccount("MyName1","", "position", "type", "mgrName");
		$this->assertEquals($expected ,$result);
	}
	function testPositionIsEmpty(){
		$admin = new Admin("xxx", "","","","");
		
		$expected = "position can't be empty!";
		$result =$admin->addAccount("MyName2","1234567890", "", "type", "mgrName");
		$this->assertEquals($expected ,$result);
	}
	function testTypeIsEmpty(){
		$admin = new Admin("xxx", "","","","");
		
		$expected = "type can't be empty!";
		$result =$admin->addAccount("MyName3","1234567890", "position", "", "mgrName");
		$this->assertEquals($expected ,$result);
	}
	function testMgrNameIsEmpty(){
		$admin = new Admin("xxx", "","","","");
		
		$expected = "mgrName can't be empty!";
		$result =$admin->addAccount("MyName4","1234567890", "position", "type", "");
		$this->assertEquals($expected ,$result);
	}
	function testUsernameAlreadyTaken(){
		$admin = new Admin("xxx", "","","","");
		$admin->addAccount("MyName","1234567890", "position", "type", "mgrName");

		$expected = "username already taken... please try another!";
		$result =$admin->addAccount("MyName","1234567890", "position", "type", "mgrName");
		$this->assertEquals($expected ,$result);
	}
}



?>