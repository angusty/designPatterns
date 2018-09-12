<?php
namespace DesignPatterns\Bridge;

class HelloWorldService extends Service
{
    public function get()
    {
        // TODO: Implement get() method.
        return $this->implementation->format('Hello World');
    }
}
