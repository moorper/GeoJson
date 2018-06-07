<?php

namespace Moorper\GeoJson\Tests\Geometries;

require __DIR__.'/../../vendor/autoload.php';

use Moorper\GeoJson\Geometries\Point;
use PHPUnit\Framework\TestCase;

class PointTest extends TestCase
{
    public function test__Construct()
    {
        $point = new Point([113, 22]);
        var_dump(json_encode($point));
    }
}
