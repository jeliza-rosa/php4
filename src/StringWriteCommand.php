<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class StringWriteCommand extends Command
{

    protected static $defaultName = 'app:create-user';

    protected function configure()
    {
        $this
        ->setName('output_string')
        ->setDescription('output string')
        ->addArgument('str', InputArgument::REQUIRED, 'desc')
        ->addOption('opt', null, InputOption::VALUE_REQUIRED, 'desc', 2
    )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        for ($i = 0; $i < $input->getOption('opt'); $i++) {

            $output->writeln($input->getArgument('str'));

        }

        return 1;
    }
}