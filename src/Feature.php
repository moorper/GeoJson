<?php

namespace Moorper\GeoJson;

class Feature
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

    public function toJson(): string
    {
        return json_encode($this);
    }
}
