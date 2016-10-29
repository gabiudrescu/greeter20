<?php

namespace spec\App;

use App\Greeter;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GreeterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Greeter::class);
    }

    function it_should_greet_you()
    {
        $this->greet()->shouldReturn('Hello');
    }

    function it_should_greet_you_by_name()
    {
        $this->greet('Gabi')->shouldReturn('Hello, Gabi!');
    }
}
