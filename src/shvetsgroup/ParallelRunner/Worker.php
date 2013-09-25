<?php
/**
 * @copyright 2013 Andreas Streichardt
 * @license MIT
 */

namespace shvetsgroup\ParallelRunner;


class Worker
{
    private $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }
}