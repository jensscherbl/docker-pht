<?php
namespace App;

use pht\Thread;
use Throwable;

try {

    $threads             = [];
    $threads['Thread 1'] = new Thread;
    $threads['Thread 2'] = new Thread;

    echo 'Created threads' . PHP_EOL;

    foreach ($threads as $thread) {
        $thread->start();
    }

    echo 'Started threads' . PHP_EOL;

    /*
    Adds tasks to the thread pool.
    */
    foreach (range(0, 9) as $taskId) {
        /*
        Sort threads by remaining tasks.
        */
        uasort($threads, function (Thread $a, Thread $b): int {
            if ($a->taskCount() > $b->taskCount()) {
                return +1;
            }
            if ($a->taskCount() < $b->taskCount()) {
                return -1;
            }
            return 0;
        });
        $keys = array_keys($threads);
        /*
        Add new task to the thread with least remaining tasks.
        */
        $threads[$keys[0]]->addClassTask(Task::class, $taskId);

        echo "Added task {$taskId} to {$keys[0]}" . PHP_EOL;
    }

    echo 'Added all tasks' . PHP_EOL;

    foreach ($threads as $thread) {
        $thread->join();
    }

    echo 'Joined threads' . PHP_EOL;

} catch (Throwable $throwable) {

    echo $throwable->getMessage() . PHP_EOL;
}
