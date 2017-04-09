<?php

namespace App;


class AutoloadingWorker extends \Worker
{
    protected $loader;

    public function __construct($loader)
    {
        $this->loader = $loader;
    }

    public function run()
    {
        require_once($this->loader);
    }

    public function start(int $options = NULL)
    {
        // to copy environment to thread use PTHREADS_INHERIT_ALL
        return parent::start($options);
    }
}