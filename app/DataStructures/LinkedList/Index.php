<?php
/**
 * Created by PhpStorm.
 * User: koray.kup
 * Date: 27.12.2016
 * Time: 15:56
 */
require __DIR__ . '/../../../vendor/autoload.php';
$data = [2, 4, 6, 1];
$T = count($data);
$head=null;
$mylist=new \DataStructures\LinkedList\LinkedList();
while($T-->0){
    $head=$mylist->insert($head,$data);
}
$mylist->display($head);