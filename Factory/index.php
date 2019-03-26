<?php

/**
 * Factory: Define an interface for creating an object but let subclasses decide how to instantiate.
 *      => ideal when we don't want to bind application specific classes, or we don't know what/how many objects
 *         will be created.
 *
 * Example: we want to create documents instance but we don't know in advance how many and what type we have to create.
 *          A good example is Symfony forms.
 *
 * Participants:
 *  - Product (DocumentBuilder): defines interface of object the factory method create
 *  - ConcreteProduct (TextDocument, ImageDocument): implements the Document interface
 *  - Creator (Application): declares factory method
 *  - ConcreteCreator (DocumentFactory): overrides factory method to return an instance of ConcreteProduct
 */

namespace Factory;

require __DIR__.'/../vendor/autoload.php';

$factory = new DocumentFactory();
$textDocument = $factory->buildDocument(TextDocument::class);
echo $textDocument->get;