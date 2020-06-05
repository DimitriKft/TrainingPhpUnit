<?php

namespace Grafikart;

use PHPUnit_Extensions_PhptTestCase;

class Math extends PHPUnit_Extensions_PhptTestCase
{
    public static function testDouble($nombre)
    {
        \Grafikart\Math::double(2);
    }
}
