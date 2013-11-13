<?php

namespace PWalkow\GameBundle\Entity;

/**
 * Description of Company
 *
 * @author Piotr Walków <walkowpiotr@gmail.com>
 */
class Company implements CompanyInterface
{
    private $capital;
    
    private $shares;
    
    private $value;

    public function getCapital() {
        return $this->capital;
    }
    
    public function getShares() {
        return $this->shares;
    }
    
    public function getValue() {
        return $this->value;
    }
}
