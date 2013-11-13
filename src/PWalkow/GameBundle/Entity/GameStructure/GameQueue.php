<?php

namespace PWalkow\GameBundle\Entity\GameStructure;

use PWalkow\GameBundle\Entity\GameStructure\StateInterface;

/**
 * FIFO Queue
 * 
 * @author Piotr Walków <walkowpiotr@gmail.com>
 */
class GameQueue implements QueueIterface {
    
    private $queue;
    
    public function __construct() {
        $this->queue = array();
    }
    
    public function count()
    {
        return count($this->queue);
    }
    
    public function add(StateInterface $state)
    {
        $this->queue[] = $state;
    }

    public function fetch()
    {
        return array_shift($this->queue);
    }
}
