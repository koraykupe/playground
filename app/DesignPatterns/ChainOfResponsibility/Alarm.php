<?php

/**
 * Created by PhpStorm.
 * User: koray.kup
 * Date: 26.12.2016
 * Time: 10:44
 */
namespace DesignPatterns\ChainOfResponsibility;

use DesignPatterns\ChainOfResponsibility\HomeChecker;
use Exception;

class Alarm extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if (!$home->alarmOn)
        {
            throw new Exception('The alarm is off!');
        }

        $this->next($home);
    }

}