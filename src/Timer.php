<?php

namespace Dndvl\HelperRuntime;

class Timer
{
    private $startedAt;
    private $counter;

    public function __construct()
    {
        $this->startedAt = microtime(true);
        $this->counter = 0;
    }

    public function start()
    {
        if (!$this->startedAt) {
            $this->startedAt = microtime(true);
        }
    }

    public function stop()
    {
        if ($this->startedAt) {
            $this->counter += microtime(true) - $this->startedAt;
            $this->startedAt = null;
        }
    }

    public function result()
    {
        $result = $this->counter;
        if ($this->startedAt) {
            $result += microtime(true) - $this->startedAt;
        }
        return $result;
    }
}