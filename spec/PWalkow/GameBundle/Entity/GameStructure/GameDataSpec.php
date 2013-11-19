<?php

namespace spec\PWalkow\GameBundle\Entity\GameStructure;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GameDataSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('PWalkow\GameBundle\Entity\GameStructure\GameData');
    }
    
    
    function it_should_allow_to_add_player($player)
    {
        $this->addPlayer($player);
    }
}
