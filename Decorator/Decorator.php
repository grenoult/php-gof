<?php

namespace Decorator;

class Decorator implements GraphicInterface
{
    /** @var GraphicInterface $component */
    private $component;

    public function __construct(GraphicInterface $component)
    {
        $this->component = $component;
    }

    /**
     * @return string
     */
    public function display()
    {
        return $this->component->display();
    }
}