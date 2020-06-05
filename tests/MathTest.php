<?php

namespace Grafikart;

use PHPUnit_Framework_TestCase;

class MathTest extends PHPUnit_Framework_TestCase
{
    public  function testDouble()
    {
        $this->assertEquals(4, \Grafikart\Math::double(2));
    }

    public  function testDoubleIsZero()
    {
        $this->assertEquals(0, \Grafikart\Math::double(0));
    }
}
