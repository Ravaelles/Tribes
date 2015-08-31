<?php

//class ClassLoader {
//
//    public static function load($name) {
//        include_once PHP . $name . ".php";
//    }
//
//}

class AutoLoader {

    private static $doNotAutoload = ['.', '..', 'Run', '_TURN_'];
    private static $earlyAutoload = ['bootstrap', 'Object', 'Json'];

    public static function autoLoad() {

        // Load few classes as early as possible
        foreach (self::$earlyAutoload as $className) {
            self::loadClass($className);
        }

        // Load all other classes normally
        $classesToLoad = scandir(PHP);
        foreach ($classesToLoad as $className) {
            self::loadClass($className);
        }
    }

    public static function loadClass($className) {
        $className = str_replace(".php", "", $className);
        if (!in_array($className, self::$doNotAutoload)) {
            include_once PHP . $className . ".php";
//            echo "Loading class: " . PHP . "$className <br />";
        }
    }

}

AutoLoader::autoLoad();

