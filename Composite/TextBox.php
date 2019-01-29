<?php

namespace Composite;

class TextBox implements GraphicInterface {
    /** @var GraphicInterface[]  */
    private $children = [];

    /** @var Text $text */
    private $text;

    /**
     * TextBox constructor.
     */
    public function __construct()
    {
        $this->text = new Text();
        $this->children = [
            new Line(),
            $this->text,
            new Line()
        ];
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text->getText();
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text->setText($text);
    }

    /**
     * Here every `display()` method is handled by children.
     * Optionally we can do additional operations (not implemented here).
     *
     * @return string
     */
    public function display()
    {
        return $this->children[0]->display().PHP_EOL.
            $this->children[1]->display().PHP_EOL.
            $this->children[2]->display();
    }
}