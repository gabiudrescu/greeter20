<?php

namespace spec\App\Collection;

use App\Collection\CommonNames;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Doctrine\Common\Collections\Collection;

class CommonNamesSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(CommonNames::class);
    }

    function it_should_be_an_array_collection()
    {
        $this->shouldImplement(Collection::class);
    }

    function it_should_return_an_array_of_common_names()
    {
        $this->beConstructedWith(['John', 'Mary', 'Simon']);
        $this->getAllNames()->shouldContain('John');
    }
}
