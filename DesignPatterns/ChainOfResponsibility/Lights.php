<?php

/**
 * Created by PhpStorm.
 * User: koray.kup
 * Date: 26.12.2016
 * Time: 10:44
 */
namespace DesignPatterns\ChainOfResponsibility;

use DesignPatterns\ChainOfResponsibility\HomeStatus;
use DesignPatterns\ChainOfResponsibility\HomeChecker;
use Exception;

class Lights extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if (!$home->lightsOff)
        {
            throw new Exception('The lights are still on!');
        }

        $this->next($home);
    }

}