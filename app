<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$app = new \Symfony\Component\Console\Application('task 2');

$app->add(new \App\HiCommand);
$app->add(new \App\StringWriteCommand);
$app->add(new \App\DataUserCommand);

$app->run();
