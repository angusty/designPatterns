<?php
namespace DesignPatterns\Tests;

use DesignPatterns\Composite\Form;
use DesignPatterns\Composite\InputElement;
use DesignPatterns\Composite\TextElement;
use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    public function testRender()
    {
        $form = new Form();
        $text_object = new TextElement('Username: ');
        $input_object = new InputElement();
        $form->addElement($text_object);
        $form->addElement($input_object);
        $text_object = new TextElement('Password: ');
        $input_object = new InputElement();
        $form->addElement($text_object);
        $form->addElement($input_object);
        $expected_value = '<form>Username: <input type="text" />Password: <input type="text" /></form>';
        $this->assertEquals($expected_value, $form->render());
    }
}
