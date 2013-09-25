<?php
/**
 * @copyright 2013 Andreas Streichardt
 * @license MIT
 */

namespace shvetsgroup\ParallelRunner\Context\Initializer;

use Behat\Behat\Context\ContextInterface;
use Behat\Behat\Context\Initializer\InitializerInterface;
use shvetsgroup\ParallelRunner\Context\WorkerAwareInterface;
use shvetsgroup\ParallelRunner\Worker;

class WorkerAwareInitializer implements InitializerInterface
{
    private $worker;

    public function setWorker(Worker $worker)
    {
        $this->worker = $worker;
    }

    public function supports(ContextInterface $context)
    {
        return $context instanceof WorkerAwareInterface;
    }

    /**
     * Initializes provided context.
     *
     * @param ContextInterface $context
     */
    public function initialize(ContextInterface $context)
    {
        if ($this->worker) {
            $context->setWorker($this->worker);
        }
    }
}