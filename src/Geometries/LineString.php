<?php

namespace Moorper\GeoJson\Geometries;

class LineString extends Geometry
{
    public function __construct(array $coordinates = [])
    {
        parent::__construct(static::$LineString, $coordinates);

        foreach ($coordinates as $coordinate) {
            if (!is_array($coordinate)) {
                throw new \Exception('coordinates is invalid');
            }
            if (!$this->is_coordinate($coordinate)) {
                throw new \Exception('coordinates is invalid');
            }
        }
        $this->coordinates[] = $coordinates;
    }

    public function addCoordinate(array $coordinate): bool
    {
        if (!$this->is_coordinate($coordinate)) {
            throw new \Exception('coordinate is invalid');
        }
        array_push($this->coordinates, $coordinate);

        return true;
    }
}
