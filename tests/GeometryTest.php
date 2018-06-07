<?php

namespace Moorper\GeoJson\Tests;

require __DIR__.'/../vendor/autoload.php';

use Moorper\GeoJson\Geometry;
use PHPUnit\Framework\TestCase;

class GeometryTest extends TestCase
{
    public function test__Construct()
    {
        $geometry = new Geometry(Geometry::$Point, [113, 22]);
        var_dump((array) $geometry);
    }
}
