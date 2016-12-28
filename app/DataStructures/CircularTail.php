<?php

/**
 * Created by PhpStorm.
 * User: koray.kup
 * Date: 27.12.2016
 * Time: 09:46
 */
namespace DataStructures;
const ARRAY_MAX = 10;

class CircularTail
{
    private $data = [ARRAY_MAX];
    private $tailHead;
    private $tailEnd;
    private $numberOfElements;

    public function __construct($data, $tailHead, $tailEnd, $numberOfElements) {
        $this->data = $data;
        $this->tailHead = $tailHead;
        $this->tailEnd = $tailEnd;
        $this->numberOfElements = $numberOfElements;
    }

    public function add(int $newData) :bool
    {
        // Number of elements can not be higher or equal than defined array max value
        if ($this->numberOfElements >= ARRAY_MAX) return false;

        if ($this->tailHead == -1) $this->tailHead++;

        // If current tail end is latest value of array, we have to move it to hea.
        if ($this->tailEnd == ARRAY_MAX-1) $this->tailEnd = 0;

        $data[$this->tailEnd] = $newData;

        // Increase number of elements
        $this->numberOfElements++;

    }

    public function delete(int &$cell) :bool
    {
        if ($this->tailEnd == 0) return false;

        $cell = $this->data[$this->tailHead];

        if ($this->tailHead == ARRAY_MAX-1) {
            $this->tailHead = 0;
        } else {
            $this->tailHead++;
        }

        $this->tailEnd--;

        if ($this->tailEnd <= 0) {
            $this->tailHead = $this->tailEnd-1;
        }

        return true;

    }

    public function isEmpty() :bool
    {
    }


}