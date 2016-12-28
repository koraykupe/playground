<?php

/**
 * Created by PhpStorm.
 * User: koray.kup
 * Date: 26.12.2016
 * Time: 10:45
 */
namespace DesignPatterns\ChainOfResponsibility;

use DesignPatterns\ChainOfResponsibility\HomeStatus;

abstract class HomeChecker
{
    protected $successor;

    public abstract function check(HomeStatus $home);

    public function succeedWith(HomeChecker $successor)
    {
        $this->successor = $successor;
    }

    public function next(HomeStatus $home)
    {
        if ($this->successor)
        {
            $this->successor->check($home);
        }
    }
}