<?php

/**
 * Adapter: converts interface of a class into another interface clients expect.
 *
 * Example: let's say we have a Shape interface and we want to use it to display objects.
 * We also have a Text library that we don't want to touch (for instance, used somewhere else, part of a library, etc.)
 * so if we want to display to use the same methods in Shape but for Text, we use an Adapter.
 *
 * Participants:
 *  - Target (Shape): this is the interface that we want to use in our program.
 *  - Client (index.php): where we use this interface
 *  - Adaptee (TextView): the existing interface that needs adapting
 *  - Adapter (TextShape): our new class that adapts interface of Adaptee to Target interface
 */

namespace Adapter;

require __DIR__.'/../vendor/autoload.php';

use Adapter\Shape\LineShape;
use Adapter\Shape\PolygonShape;
use Adapter\Shape\TextShape;

$line = new LineShape();
$polygon = new PolygonShape();
$text = new TextShape();

echo $line->display().PHP_EOL;
echo $polygon->display().PHP_EOL;
echo $text->display().PHP_EOL;
