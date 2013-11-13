<?php

namespace PWalkow\GameBundle\Entity;

/**
 *
 * @author Piotr Walków <walkow.piotr@gmail.com>
 */
interface PlayerCollectionInterface {
    
    public function addPlayer(PlayerInterface $player);
    
}
