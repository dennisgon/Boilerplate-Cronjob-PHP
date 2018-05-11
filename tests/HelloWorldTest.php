<?php

class HelloWorldTest extends \PHPUnit\Framework\TestCase {
	
	private $number;

	protected function setUp()
	{
	    $this->number = 2;
	}

	public function testOdd()
	{
	    $this->number++;
	    $this->assertNotEquals(0, $this->number % 2);
	}

	public function testEven()
	{
	    $this->assertEquals(0, $this->number % 2);
	}

	protected function tearDown()
	{
	    $this->number = null;
	}

}

?>