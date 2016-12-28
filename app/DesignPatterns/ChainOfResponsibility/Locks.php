<?php

/**
 * Created by PhpStorm.
 * User: koray.kup
 * Date: 26.12.2016
 * Time: 10:44
 */
namespace DesignPatterns\ChainOfResponsibility;

use DesignPatterns\ChainOfResponsibility\HomeChecker;
use DesignPatterns\ChainOfResponsibility\HomeStatus;
use Exception;

class Locks extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if (!$home->locked)
        {
            throw new Exception('The home is not locked!');
        }

        $this->next($home);
    }

}