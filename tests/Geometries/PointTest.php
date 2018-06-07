<?php

namespace Moorper\GeoJson\Tests\Geometries;

use Moorper\GeoJson\Geometries\Point;
use Moorper\GeoJson\Tests\TestCase;

require __DIR__.'/../../vendor/autoload.php';

class PointTest extends TestCase
{
    public function test__Construct()
    {
        $point = new Point([113, 22]);
        var_dump(json_encode($point));
    }
}
