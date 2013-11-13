<?php

namespace spec\PWalkow\GameBundle\Entity\GameStructure;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use PWalkow\GameBundle\Entity\GameStructure\StateInterface;

class GameQueueSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('PWalkow\GameBundle\Entity\GameStructure\GameQueue');
    }
    
    function it_should_allow_to_count_number_of_states()
    {
        $this->count()->shouldBe(0);
    }
    
    function it_allow_to_add_state(StateInterface $state)
    {
        $this->add($state);
        $this->count()->shouldBe(1);
    }
    
    function it_allow_to_add_more_then_one_state(StateInterface $state1, StateInterface $state2)
    {
        $this->add($state1);
        $this->add($state2);
        
        $this->count()->shouldBe(2);
    }
    
    function it_allow_to_remove_first_state(StateInterface $state1, StateInterface $state2)
    {
        $this->add($state1);
        $this->add($state2);
        
        $state = $this->fetch()->shouldBe($state1);
        
        $this->count()->shouldBe(1);
    }
}
