<?php

/**
 * Created by PhpStorm.
 * User: koray.kup
 * Date: 26.12.2016
 * Time: 10:43
 */
namespace DesignPatterns\ChainOfResponsibility;

class HomeStatus
{
    /*
     * If any property set as false, handler will throw an error message.
     */
    public $alarmOn = true;
    public $locked = false;
    public $lightsOff = true;

}