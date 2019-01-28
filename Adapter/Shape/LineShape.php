<?php

namespace Adapter\Shape;

class LineShape implements Shape {
    /**
     * @return mixed|string
     */
    public function display()
    {
        return 'A line is being displayed.';
    }
}