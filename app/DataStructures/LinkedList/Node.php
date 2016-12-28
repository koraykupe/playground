<?php

/**
 * Created by PhpStorm.
 * User: koray.kup
 * Date: 27.12.2016
 * Time: 13:16
 */
namespace DataStructures\LinkedList;
class Node
{
    public $data;
    public $next;
    function __construct($d)
    {
        $this->data = $d;
        $this->next = NULL;
    }
}