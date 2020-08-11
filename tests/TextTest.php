<?php

use Oxyframe\Text;
use PHPUnit\Framework\TestCase;

class TextTest extends TestCase
{
    public function testStringAttribute()
    {
        $name = new Text("Hello World");
        $this->assertEquals($name, "Hello World");
    }
    public function testConcatenation()
    {
        $firstName = new Text("Hello");
        $lastName = new Text("World");
        $name = $firstName . " " . $lastName;
        $this->assertEquals($name, "Hello World");
    }
    public function testExample()
    {
        $this->assertTrue(true);
    }
}
