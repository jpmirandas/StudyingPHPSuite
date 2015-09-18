<?php
class TwoTest extends PHPUnit_Framework_TestCase {

	public function test04(){
		$this->assertTrue(true);
	}
	
	public function test05(){
		$this->assertTrue(false);
	}
	
	public function test06(){
		$this->assertEquals(2,3);
	}
	
	public function test07(){
		$this->assertEquals(3,3);
	}

}