<?php

/**
 * Created by PhpStorm.
 * User: koray.kup
 * Date: 26.12.2016
 * Time: 10:53
 */
namespace DesignPatterns\ChainOfResponsibility;
require __DIR__ . '/../../vendor/autoload.php';

use DesignPatterns\ChainOfResponsibility\Locks;
use DesignPatterns\ChainOfResponsibility\Lights;
use DesignPatterns\ChainOfResponsibility\Alarm;

$locks = new Locks;
$lights = new Lights;
$alarm = new Alarm;

$locks->succeedWith($lights);
$lights->succeedWith($alarm);

$locks->check(new HomeStatus());
