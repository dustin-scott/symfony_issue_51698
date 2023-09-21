<?php

use Symfony\Component\DependencyInjection\ContainerBuilder;
use SymfonyIssue51698\Service;
use SymfonyIssue51698\Controller\Main;

require_once(dirname(__DIR__) . '/vendor/autoload.php');

$displayService = new Service\Display\Console();
$containerBuilder = new ContainerBuilder();
$containerBuilder->set('display_service', $displayService);
$containerBuilder->register('display_service', Service\Display::class)
    ->setAutowired(true);
$containerBuilder->setAlias(Service\Display\Console::class, 'display_service');
$containerBuilder->register('main', Main::class)
    ->addArgument("Hello World!")
    ->setPublic(true)
    ->setAutowired(true)
    ->setAutoconfigured(true)
    ->addMethodCall('customInjection');
$containerBuilder->compile();
$main = $containerBuilder->get('main');
$main->index();
