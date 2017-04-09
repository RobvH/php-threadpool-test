<?php

namespace App;


class ThreadWorker extends \Threaded
{
    protected $completed;

    private $threadId;

    public function __construct($threadId)
    {
        $this->completed = false;

        $this->threadId = $threadId;
    }

    public function run()
    {
        echo 'Hello from thread ' . $this->threadId . '!'.PHP_EOL;

        $this->completed = true;
    }

    public function isGarbage(): bool
    {
        return $this->completed;
    }
}