<?php

namespace Moorper\GeoJson\Tests\Geometries;

require __DIR__.'/../../vendor/autoload.php';

use Moorper\GeoJson\Geometries\LineString;
use PHPUnit\Framework\TestCase;

class LineStringTest extends TestCase
{
    public function test__Construct()
    {
        $lineString = new LineString([[113, 22]]);
        var_dump(json_encode($lineString));
    }
}
