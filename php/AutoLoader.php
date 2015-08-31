<?php

//class ClassLoader {
//
//    public static function load($name) {
//        include_once PHP . $name . ".php";
//    }
//
//}

class AutoLoader {

    private static $doNotAutoload = ['.', '..', 'Start', '_TURN_'];

    public static function autoLoad() {
        $classesToLoad = scandir(PHP);

        foreach ($classesToLoad as $className) {
            $className = str_replace(".php", "", $className);
            if (!in_array($className, self::$doNotAutoload)) {
                include_once PHP . $className . ".php";
//                echo PHP . "$className <br />";
            }
        }
    }

}

AutoLoader::autoLoad();

