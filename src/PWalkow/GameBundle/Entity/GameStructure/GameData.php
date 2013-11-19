<?php

namespace PWalkow\GameBundle\Entity\GameStructure;

/**
 * @author Piotr Walków <walkowpiotr@gmail.com>
 */
class GameData {
    
    private $players;

    public function __construct() {
        $this->players = array();
    }
    
    public function addPlayer($player)
    {
        $this->players[] = $player;
    }
}
