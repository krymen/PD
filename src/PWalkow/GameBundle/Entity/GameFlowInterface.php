<?php

namespace PWalkow\GameBundle\Entity;

/**
 * @author Piotr Walków <walkowpiotr@gmail.com>
 */
interface GameFlowInterface
{
    public function addPlayer(PlayerInterface $player);

}
