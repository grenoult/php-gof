<?php

namespace Adapter\Text;

/**
 * Class TextView
 * @package Adapter\Text
 */
class TextView extends Text {
    /**
     * @return string
     */
    public function displayText() {
        return $this->getText();
    }
}