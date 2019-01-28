<?php

namespace Adapter\Shape;

use Adapter\Text\TextView;

/**
 * Class TextShape
 * @package Adapter\Shape
 */
class TextShape extends TextView implements Shape {
    /**
     * @return mixed|string
     */
    public function display()
    {
        return $this->displayText();
    }
}