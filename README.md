PHP ThreadPool Test
==
ThreadTest is a simple PHP project that demonstrates use of pthreads `Pool` with a worker thread class capable of autoloading.   

Purpose
-
This project demonstrates basic use of the thread pools in PHP using Composer and its autoloader.

Performance Considerations
-
The `Pool` class will not automatically grow the thread pool. By sleeping the thread to simulate work or IO time, you can understand how your thread count will influence the performance of the system. If the count is too low, your application will block waiting on available threads, too high and switching overhead will become a factor.

Compatability
-
This project (per the composer.json) requires the pthreads extension. This requires PHP and your other extensions to be built with thread safety `maintainer-zts` enabled. 

Related
-
This project is part of a short polyglot series on thread pools:

* https://github.com/RobvH/threadpool-test-net
* https://github.com/RobvH/threadpool-test-php
