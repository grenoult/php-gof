<?php

namespace Composite;

class Line implements GraphicInterface {
    /**
     * @return string
     */
    public function display()
    {
        return '--------------';
    }
}