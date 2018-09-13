<?php
namespace DesignPatterns\Composite;

class Form implements RenderableInterface
{
    private $elements;
    public function render() : string
    {
        // TODO: Implement render() method.
        $formCode = '<form>';
        foreach ($this->elements as $element) {
            $formCode .= $element->render();
        }
        $formCode .= '</form>';
        return $formCode;
    }
    public function addElement(RenderableInterface $element)
    {
        $this->elements[] = $element;
    }
}
