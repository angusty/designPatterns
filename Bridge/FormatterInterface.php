<?php
namespace DesignPatterns\Bridge;

interface FormatterInterface
{
    public function format(string $text);
}