<?php

namespace Dndvl\HelperRuntime;

class Runtime
{
    /** @var Timer[] */
    private static $timers = [];
    private static $round = 4;

    public static function start($name = 'default')
    {
        if (isset(self::$timers[$name])) {
            self::$timers[$name]->start();
        } else {
            self::$timers[$name] = new Timer();
        }
    }

    public static function stop($name = 'default')
    {
        if (!isset(self::$timers[$name])) {
            return 0;
        }
        self::$timers[$name]->stop();
        return round(self::$timers[$name]->result(), self::$round);
    }

    public static function result($name = 'default')
    {
        if (!isset(self::$timers[$name])) {
            return 0;
        }
        return round(self::$timers[$name]->result(), self::$round);
    }

    public static function resultAll()
    {
        $result = [];
        foreach (self::$timers as $name => $timer) {
            $result[$name] = round($timer->result(), self::$round);
        }
        return $result;
    }
}