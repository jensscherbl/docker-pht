<?php
namespace App;

final class Task implements \pht\Runnable
{
    private $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function run(): void
    {
        echo "Task {$this->id} started" . PHP_EOL;

        /*
        Chaos monkey... ;)
        */
        sleep(rand(1,3));

        echo "Task {$this->id} finished" . PHP_EOL;
    }
}
