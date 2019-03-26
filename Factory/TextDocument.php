<?php

namespace Factory;

class TextDocument implements DocumentBuilder {
    private $content;

    public function setContent($text)
    {
        $this->content = $text;
    }
}