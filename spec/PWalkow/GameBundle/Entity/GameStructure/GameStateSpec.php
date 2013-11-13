<?php

namespace spec\PWalkow\GameBundle\Entity\GameStructure;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GameStateSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('PWalkow\GameBundle\Entity\GameStructure\GameState');
    }
}
