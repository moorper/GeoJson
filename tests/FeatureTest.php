<?php

namespace Moorper\GeoJson\Tests;

require __DIR__.'/../vendor/autoload.php';

use Moorper\GeoJson\Feature;
use Moorper\GeoJson\Geometries\Point;
use PHPUnit\Framework\TestCase;

class FeatureTest extends TestCase
{
    public function test__Construct()
    {
        $point = new Point([113, 22]);
        $feature = new Feature($point);
        var_dump(json_encode($feature));
    }
}
