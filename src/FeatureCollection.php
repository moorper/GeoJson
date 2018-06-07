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

    public function toJson(): string
    {
        return json_encode($this);
    }
}
