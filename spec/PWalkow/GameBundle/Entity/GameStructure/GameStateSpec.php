<?php

namespace spec\PWalkow\GameBundle\Entity\GameStructure;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use PWalkow\GameBundle\Entity\GameStructure\StateInterface;

class GameStateSpec extends ObjectBehavior
{
    /**
     * @param StateInterface $state
     */
    function let($state)
    {
//        $this->beConstructedWith($state);
    }
    
    function it_is_initializable()
    {
        $this->shouldHaveType('PWalkow\GameBundle\Entity\GameStructure\GameState');
    }
//    
//    function it_should_have_reference_to_previous_state(StateInterface $state)
//    {
//        $this->getPrevious()->shouldBe($state);
//    }
}
