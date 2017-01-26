<?php
/**
 * Copyright (c) 2017.
 *
 * @author   Koray Küpe <github@koraykupe.com.tr>
 * @category Algorithms
 * @file     It finds height of a given Binary Search Tree
 *
 */

class Node
{
    public $left,$right;
    public $data;
    function __construct($data)
    {
        $this->left = $this->right = null;
        $this->data = $data;
    }
}
class Solution
{
    /**
     * @param $root
     * @param $data
     * @return Node
     */
    public function insert($root, $data)
    {
        if ($root==null) {
            return new Node($data);
        } else {
            if ($data <= $root->data) {
                $cur=$this->insert($root->left, $data);
                $root->left = $cur;
            } else {
                $cur=$this->insert($root->right, $data);
                $root->right = $cur;
            }
            return $root;
        }
    }


    /**
     * @param $root
     * @return int
     * if t is empty height(t) = -1
     * else height(t) = 1 + MAX(height(leftSubtree(t), rightSubtree(t)))
     */
    public function getHeight(Node $root)
    {
        if ($root == null) {
            return -1;
        }

        // Cooler solution
        return 1 + max($this->getHeight($root->left), $this->getHeight($root->right));

        /*
        $left = $this->getHeight($root->left);
        $right = $this->getHeight($root->right);

        if ($left > $right) {
            return $left+1;
        } else {
            return $right+1;
        }
        */
    }
}

$myTree = new Solution();
$root = null;
$nodes = [3, 5, 2, 1, 4, 6, 7];

foreach ($nodes as $node) {
    $root = $myTree->insert($root, $node);
}

$height = $myTree->getHeight($root);
echo $height;
