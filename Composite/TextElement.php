<?php
namespace DesignPatterns\Composite;

class TextElement implements RenderableInterface
{
    private $text;
    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function render() : string
    {
        // TODO: Implement render() method.
        return $this->text;
    }
}
