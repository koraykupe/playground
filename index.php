<?php
/**
 * Created by PhpStorm.
 * User: koray.kup
 * Date: 27.12.2016
 * Time: 13:55
 */
namespace DesignPatterns\ChainOfResponsibility;
require __DIR__ . '/vendor/autoload.php';

/*
require 'HomeChecker.php';
require 'HomeStatus.php';
require 'Alarm.php';
require 'Lights.php';
require 'Locks.php';
*/

use DesignPatterns\ChainOfResponsibility\Locks;
use DesignPatterns\ChainOfResponsibility\Lights;
use DesignPatterns\ChainOfResponsibility\Alarm;

$locks = new Locks();
$lights = new Lights();
$alarm = new Alarm();

$locks->succeedWith($lights);
$lights->succeedWith($alarm);

$locks->check(new HomeStatus());
