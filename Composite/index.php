<?php

/**
 * Composite: useful to treat each element of a tree structure individually.
 *
 * Example: let's say we have primitive objects to display, such as Text or Line but we also have to display
 * more complex objects such as TextBox that is made of Text and Line. As a client, I just want to use
 * these classes uniformly and here, call `display()` on each of them. This is Composite:
 *  - I want to represent hierarchies of object, either very complex objects or simpler ones,
 *  - I want to use them uniformly while ignoring their differences.
 *
 * Participants:
 *  - Component (Graphic): interface used by all classes in the composition with behaviour and accessing child components
 *  - Leaf (Line, Text): primitive objects, no children.
 *  - Composite (TextBox): store and defines behaviour of child components
 *  - Client (index.php): where we use the composition
 *
 * See Line, Text and TextBox classes for clarifications.
 */

namespace Composite;

require __DIR__.'/../vendor/autoload.php';

// Displays a Line (primitive class)
$line = new Line();
echo $line->display().PHP_EOL;

// Displays a Text (primitive class)
$text = new Text();
echo $text->display().PHP_EOL;

// Displays a TextBox (Composite class)
$textBox = new TextBox();
$textBox->setText('Composite yay!');
echo $textBox->display();