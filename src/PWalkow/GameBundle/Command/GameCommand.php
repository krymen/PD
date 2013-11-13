<?php

namespace PWalkow\GameBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * @author Piotr Walków <walkow.piotr@gmail.com>
 */
class GameCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this->setName('pwa:game');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
    }
}
