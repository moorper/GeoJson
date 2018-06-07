<?php

namespace Moorper\GeoJson\Tests;

require __DIR__.'/../vendor/autoload.php';

use Moorper\GeoJson\Feature;
use Moorper\GeoJson\Geometry;
use PHPUnit\Framework\TestCase;

class FeatureTest extends TestCase
{
    public function test__Construct()
    {
        $feature = new Feature(Geometry::$Point, [113, 22]);
        var_dump(json_encode($feature));
    }
}
