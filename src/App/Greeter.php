<?php

namespace App;

class Greeter
{
    public function greet($name = null)
    {
        if(null === $name)
        {
            return 'Hello';
        }

        $greeting = sprintf('Hello, %s!', $name);

        return $greeting;
    }
}
