<?php

namespace Adapter\Text;

class Text {
    /** @var string $text */
    private $text = 'default Text';

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }


}