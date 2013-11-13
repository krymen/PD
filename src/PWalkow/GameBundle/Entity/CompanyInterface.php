<?php

namespace PWalkow\GameBundle\Entity;

/**
 * @author Piotr Walków <walkow.piotr@gmail.com>
 */
interface CompanyInterface
{
    public function getValue();

    public function getCapital();
    
    public function getShares();

}
