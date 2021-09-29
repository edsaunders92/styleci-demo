<?php

class HelloWorld extends
  World
{
    public function helloWorld()
    {
        return 'hello world';
    }

    public function toString()
    {
        return $this->helloWorld();
    }

    public function isHelloWorld($string)
    {
        return $string == $this->helloWorld();
    }
}
