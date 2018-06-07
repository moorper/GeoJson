<?php

namespace Moorper\GeoJson\Tests\Geometries;

require __DIR__.'/../../vendor/autoload.php';

use Moorper\GeoJson\Geometries\Point;

class PointTest extends \PHPUnit\Framework\TestCase
{
    public function test__Construct()
    {
        $point = new Point([113, 22]);
        var_dump(json_encode($point));
    }
}
