<?php

namespace Moorper\GeoJson\Geometries;

use Moorper\GeoJson\GeoJson;

class Geometry extends GeoJson
{
    public static $Point = 'Point';
    public static $LineString = 'LineString';
    public static $Polygon = 'Polygon';
    public static $MultiPoint = 'MultiPoint';
    public static $MultiLineString = 'MultiLineString';
    public static $MultiPolygon = 'MultiPolygon';
    protected $type;
    protected $coordinates;

    protected function __construct(string $type, array $coordinates)
    {
        $array = ['Point', 'LineString', 'Polygon', 'MultiPoint', 'MultiLineString', 'MultiPolygon'];
        if (!in_array($type, $array)) {
            throw new \Exception('Not support type');
        }

        $this->type = $type;
    }

    public function is_coordinate(array $coordinate)
    {
        if (2 == count($coordinate) && is_numeric($coordinate[0]) && is_numeric($coordinate[1])) {
            return true;
        }

        return false;
    }

    public function toJson(): string
    {
        return json_encode($this);
    }

    public function jsonSerialize()
    {
        $geoJson = [];
        $geoJson['type'] = $this->type;
        $geoJson['coordinates'] = $this->coordinates;

        return $geoJson;
    }
}
