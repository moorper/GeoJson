<?php

namespace Moorper\GeoJson;

class Geometry
{
    public static $Point = 'Point';
    public static $LineString = 'LineString';
    public static $Polygon = 'Polygon';
    public static $MultiPoint = 'MultiPoint';
    public static $MultiLineString = 'MultiLineString';
    public static $MultiPolygon = 'MultiPolygon';
    public $type;
    public $coordinates;

    public function __construct(string $type, array $coordinates)
    {
        $array = ['Point', 'LineString', 'Polygon', 'MultiPoint', 'MultiLineString', 'MultiPolygon'];
        if (!in_array($type, $array)) {
            throw new \Exception('Not support type');
        }

        $this->type = $type;
        $this->coordinates = $coordinates;
    }
}
