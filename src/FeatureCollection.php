<?php

namespace Moorper\GeoJson;

class FeatureCollection extends GeoJson
{
    public $type;
    public $features;

    public function __construct()
    {
        $this->type = 'FeatureCollection';
        $this->features = [];
    }

    public function jsonSerialize()
    {
        parent::jsonSerialize();

        $geoJson = [];
        $geoJson['type'] = $this->type;
        $geoJson['features'] = $this->features;

        return $geoJson;
    }
}
