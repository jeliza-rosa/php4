<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class HiCommand extends Command
{

    protected static $defaultName = 'app:create-user';

    protected function configure()
    {
        $this
        ->setName('say_hello')
        ->setDescription('say hello')
        ->addArgument('str', InputArgument::REQUIRED, 'desc')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $output->writeln('Привет, ' . $input->getArgument('str'));

        return 1;
    }
}