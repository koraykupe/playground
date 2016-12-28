<?php

/**
 * Created by PhpStorm.
 * User: koray.kup
 * Date: 27.12.2016
 * Time: 13:16
 */
namespace DataStructures\LinkedList;
use DataStructures\LinkedList\Node;
class LinkedList
{
    // Insert new node
    function insert($head, $data){
        $current = $head;
        if ($head == null) {
            $head = new Node($data);
        } else {
            while($current->next) {
                $current = $current->next;
            }
            $current->next = new Node($data);
        }
        return $head;
    }

    function display($head){
        $start=$head;
        while($start){
            echo $start->data,' ';
            $start=$start->next;
        }
    }

}