<?php

require_once('vendor/autoload.php');

use App\AutoloadingWorker;
use App\ThreadableTask;

$threadableTask = new ThreadableTask(100, AutoloadingWorker::class, ['vendor/autoload.php']);

$threadableTask->process();
