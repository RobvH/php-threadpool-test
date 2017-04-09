<?php

namespace App;

class ThreadableTask extends \Pool
{
    public function process()
    {
        $this->dispatchWorkerThreads();

        $this->waitForAllThreadToFinish();
    }

    private function dispatchWorkerThreads()
    {
        for ($i = 0; $i < 150; ++$i) {
            $this->submit(new ThreadWorker($i));
        }
    }

    private function waitForAllThreadToFinish()
    {
        while ($this->collect(function($work) {
            return $work->isGarbage();
        })) continue;

        $this->shutdown();
    }
}