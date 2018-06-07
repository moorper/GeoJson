<?php

namespace Moorper\GeoJson;

use Moorper\GeoJson\Geometries\Geometry;

class Feature extends GeoJson
{
    public $type;
    public $properties;
    public $geometry;

    public function __construct(Geometry $geometry)
    {
        $this->type = 'Feature';
        $this->properties = [];
        $this->geometry = $geometry;
    }

    public function jsonSerialize()
    {
        parent::jsonSerialize();

        $geoJson = [];
        $geoJson['type'] = $this->type;
        $geoJson['properties'] = $this->properties;
        $geoJson['geometry'] = $this->geometry;

        return $geoJson;
    }
}
