<?php

namespace Adapter\Shape;

class PolygonShape implements Shape {
    /**
     * @return mixed|string
     */
    public function display()
    {
        return 'A polygon is being displayed.';
    }
}