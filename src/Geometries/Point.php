<?php

namespace Moorper\GeoJson\Geometries;

class Point extends Geometry
{
    public function __construct(array $coordinates = [])
    {
        parent::__construct(static::$Point, $coordinates);

        if (!$this->is_coordinate($coordinates)) {
            throw new \Exception('coordinates is invalid');
        }
        $this->coordinates = $coordinates;
    }
}
