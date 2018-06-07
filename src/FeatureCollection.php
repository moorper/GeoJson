<?php

namespace Moorper\GeoJson;

class FeatureCollection extends GeoJson
{
    private $type;
    private $features;

    public function __construct()
    {
        $this->type = 'FeatureCollection';
        $this->features = [];
    }

    public function getFeatures()
    {
        return $this->features;
    }

    public function addFeature(Feature $feature)
    {
        array_push($this->features, $feature);

        return $this->features;
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
