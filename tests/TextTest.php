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
    public function testAfter()
    {
        return $this->assertTrue(false);
    }
    public function testAfterLast()
    {
        return $this->assertTrue(false);
    }
    public function testAppend()
    {
        return $this->assertTrue(false);
    }
    public function testAscii()
    {
        return $this->assertTrue(false);
    }
    public function testBaseName()
    {
        return $this->assertTrue(false);
    }
    public function testBefore()
    {
        return $this->assertTrue(false);
    }
    public function testBeforeLast()
    {
        return $this->assertTrue(false);
    }
    public function testBetween()
    {
        return $this->assertTrue(false);
    }
    public function testCamel()
    {
        return $this->assertTrue(false);
    }
    public function testContains()
    {
        return $this->assertTrue(false);
    }
    public function testContainsAll()
    {
        return $this->assertTrue(false);
    }
    public function testDirName()
    {
        return $this->assertTrue(false);
    }
    public function testEndsWith()
    {
        return $this->assertTrue(false);
    }
    public function testFinish()
    {
        return $this->assertTrue(false);
    }
    public function testIs()
    {
        return $this->assertTrue(false);
    }
    public function testIsAscii()
    {
        return $this->assertTrue(false);
    }
    public function testIsEmptyFunction()
    {
        return $this->assertTrue(false);
    }
    public function testIsUuid()
    {
        return $this->assertTrue(false);
    }
    public function testIsNotEmpty()
    {
        return $this->assertTrue(false);
    }
    public function testKebab()
    {
        return $this->assertTrue(false);
    }
    public function testLength()
    {
        return $this->assertTrue(false);
    }
    public function testLimit()
    {
        return $this->assertTrue(false);
    }
    public function testLower()
    {
        return $this->assertTrue(false);
    }
    public function testLtrim()
    {
        return $this->assertTrue(false);
    }
    public function testMatch()
    {
        return $this->assertTrue(false);
    }
    public function testMatchAll()
    {
        return $this->assertTrue(false);
    }
    public function testPlural()
    {
        return $this->assertTrue(false);
    }
    public function testPrepend()
    {
        return $this->assertTrue(false);
    }
    public function testRandom()
    {
        return $this->assertTrue(false);
    }
    public function testReplace()
    {
        return $this->assertTrue(false);
    }
    public function testReplaceArray()
    {
        return $this->assertTrue(false);
    }
    public function testReplaceFirst()
    {
        return $this->assertTrue(false);
    }
    public function testReplaceLast()
    {
        return $this->assertTrue(false);
    }
    public function testReplaceMatches()
    {
        return $this->assertTrue(false);
    }
    public function testRtrim()
    {
        return $this->assertTrue(false);
    }
    public function testSingular()
    {
        return $this->assertTrue(false);
    }
    public function testSlug()
    {
        return $this->assertTrue(false);
    }
    public function testSplit()
    {
        return $this->assertTrue(false);
    }
    public function testSnake()
    {
        return $this->assertTrue(false);
    }
    public function testStart()
    {
        return $this->assertTrue(false);
    }
    public function testStartsWith()
    {
        return $this->assertTrue(false);
    }
    public function testStudly()
    {
        return $this->assertTrue(false);
    }
    public function testSubstr()
    {
        return $this->assertTrue(false);
    }
    public function testTitle()
    {
        return $this->assertTrue(false);
    }
    public function testTrim()
    {
        return $this->assertTrue(false);
    }
    public function testUcfirst()
    {
        return $this->assertTrue(false);
    }
    public function testUpper()
    {
        return $this->assertTrue(false);
    }
    public function testUuid()
    {
        return $this->assertTrue(false);
    }
    public function testWhen()
    {
        return $this->assertTrue(false);
    }
    public function testWhenEmpty()
    {
        return $this->assertTrue(false);
    }
    public function testWords()
    {
        return $this->assertTrue(false);
    }
}
