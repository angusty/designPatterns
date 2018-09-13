<?php
namespace DesignPatterns\Composite;

class InputElement implements RenderableInterface
{
    public function render() : string
    {
        // TODO: Implement render() method.
        return '<input type="text" />';
    }

}
