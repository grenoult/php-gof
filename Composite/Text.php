<?php

namespace Composite;

class Text implements GraphicInterface {
    /** @var string $text */
    private $text = 'default text';

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function display()
    {
        return $this->text;
    }
}