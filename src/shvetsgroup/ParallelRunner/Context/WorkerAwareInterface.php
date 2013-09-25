<?php
/**
 * @copyright 2013 Andreas Streichardt
 * @license MIT
 */

namespace shvetsgroup\ParallelRunner\Context;

use shvetsgroup\ParallelRunner\Worker;

interface WorkerAwareInterface
{
    public function setWorker(Worker $worker);
}