<?php

namespace PWalkow\GameBundle\Entity\GameStructure;

/**
 * @author Piotr Walków <walkow.piotr@gmail.com>
 */
interface QueueIterface {
    
    /**
     * Dodaje State do kolejki
     * 
     * @return null
     */
    public function add(StateInterface $state);
    
    /**
     * Liczy listę elementów w kolejce
     * 
     * @return integer Lista stanów w kolejce
     */
    public function count();
    
    /**
     * Pobiera element z kolejki
     * 
     * @return StateInterface Obiekt stanu
     */
    public function fetch();
}
