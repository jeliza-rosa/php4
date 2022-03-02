<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Question\ChoiceQuestion;

class DataUserCommand extends Command
{

    protected static $defaultName = 'app:create-user';

    protected function configure()
    {
        $this
        ->setName('data_user')
        ->setDescription('data user')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $helper = $this->getHelper('question');

        $questionName = new Question('Введите ваше имя: ');
        $questionAge = new Question('Введите ваш возраст: ');
        $questionMale = new ChoiceQuestion('Ваш пол: ', ['М', 'Ж']);

        $name = $helper->ask($input, $output, $questionName);
        $age = $helper->ask($input, $output, $questionAge);
        $male = $helper->ask($input, $output, $questionMale);

        $output->writeln('Здравствуйте, ' . $name . '. Ваш возраст: ' . $age . '. Ваш пол: ' . $male);

        return 1;
    }
}