<?php

namespace Decorator;

/**
 * In this decorator, we can add another functionality, like displayWithCharacterCount().
 * We have to implements display() method from interface, but we can choose to customise it, or not, if needed.
 *
 * Class TextBoxDecorator
 * @package Decorator
 */
class TextBoxDecorator extends Decorator
{
    /**
     * @return string
     */
    private function drawBorder() {
        return '--------------';
    }

    /**
     * @return string
     */
    public function display()
    {
        return $this->drawBorder().PHP_EOL.
            parent::display().PHP_EOL.
            $this->drawBorder();
    }

    /**
     * @return string
     */
    public function displayWithCharacterCount()
    {
        $text = parent::display();
        return $this->drawBorder().PHP_EOL.
            $text.' ('.strlen($text).')'.PHP_EOL.
            $this->drawBorder();
    }
}