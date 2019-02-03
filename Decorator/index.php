<?php

/**
 * Decorator: Attach additional responsibilities to an object dynamically.
 *      => flexible alternative to subclassing for extending functionality.
 *
 * Example: we have objects to display and we want to add another functionality to an existing object without
 * having to define a child (where inheritance is impractical). We also want to add responsibility dynamically. Also
 *
 * Participants:
 *  - Component (Graphic): interface used by all classes where objects can have added responsibilities.
 *  - Concrete Component (Text): class where object can have more responsibility.
 *  - Decorator: maintains a reference to a Component object and defines an interface that conforms to Component’s interface.
 *  - ConcreteDecorator (TextBoxDecorator): add responsibilities to the component.
 */

namespace Decorator;

require __DIR__.'/../vendor/autoload.php';

$textBox = new TextBoxDecorator(new Text());
echo $textBox->display();
/*
 * Output:
 * --------------
 * default text
 * --------------
 */
echo PHP_EOL;

$textBox = new TextBoxDecorator(new Text());
echo $textBox->displayWithCharacterCount();

/*
 * Output:
 * --------------
 * default text (12)
 * --------------
 */
