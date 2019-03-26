<?php

namespace Factory;

class ImageDocument implements DocumentBuilder {
    private $content;

    public function setContent($imageContent)
    {
        $this->content = $imageContent;
    }
}