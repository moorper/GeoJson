<?php

namespace Moorper\GeoJson;

class Feature extends GeoJson
{
    public $type;
    public $properties;
    public $geometry;

    public function __construct(string $type, array $coordinates)
    {
        $this->type = 'Feature';
        $this->properties = [];
        $this->geometry = new Geometry($type, $coordinates);
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
