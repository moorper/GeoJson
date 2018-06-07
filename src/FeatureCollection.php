<?php

namespace Moorper\GeoJson;

class FeatureCollection
{
    public $type;
    public $features;

    public function __construct()
    {
        $this->type = 'FeatureCollection';
        $this->features = [];
    }

    public function toArray(): array
    {
        $geoJson = [];
        $geoJson['type'] = $this->type;
        $geoJson['features'] = $this->features;

        return $geoJson;
    }
}
