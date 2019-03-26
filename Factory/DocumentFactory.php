<?php

namespace Factory;

/**
 * Concrete factory
 *
 * Class DocumentFactory
 * @package Factory
 */
class DocumentFactory
{
    /**
     * @param $className string
     * @return DocumentBuilder
     */
    public function buildDocument($className) {
        /** @var DocumentBuilder $document */
        $document = new $className;
        return $document;
    }
}