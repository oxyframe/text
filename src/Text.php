<?php

namespace Oxyframe;

use BadMethodCallException;

class Text
{
    use Attributes;
    public function __construct(string $data = null)
    {
        $this->hasAttribute("data", $data);
    }
    public function __toString()
    {
        return $this->getData();
    }
    public function after()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function afterLast()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function append()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function ascii()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function baseName()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function before()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function beforeLast()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function between()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function camel()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function contains()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function containsAll()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function dirName()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function endsWith()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function finish()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function is()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function isAscii()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function isEmpty()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function isUuid()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function isNotEmpty()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function kebab()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function length()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function limit()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function lower()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function ltrim()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function match()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function matchAll()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function plural()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function prepend()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function random()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function replace()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function replaceArray()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function replaceFirst()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function replaceLast()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function replaceMatches()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function rtrim()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function singular()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function slug()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function split()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function snake()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function start()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function startsWith()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function studly()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function substr()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function title()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function trim()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function ucfirst()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function upper()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function uuid()
    {
        throw new BadMethodCallException("Function will be added soon.");
        $data = $this->getData();
        return $this->setData($data);
    }
    public function when()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function whenEmpty()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
    public function words()
    {
        $data = $this->getData();
        return $this->setData($data);
    }
}
