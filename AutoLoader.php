<?php

    const HTML = "./html/";
    const JS = "./js/";
    const PHP = "./php/";
    const IMAGES = "./images/";

class AutoLoader {

    private static $doNotAutoload = ['.', '..'];
    private static $earlyAutoload = ['bootstrap', 'Json', 'Object', 'MapObject',];
    private static $alreadyLoaded = [];

    // =========================================================================

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
        if (!in_array($className, self::$doNotAutoload) && !in_array($className, self::$alreadyLoaded)) {
//            echo "Loading class: " . PHP . "$className <br />";
            include_once PHP . $className . ".php";
            self::$alreadyLoaded[] = $className;
        }
    }

}

AutoLoader::autoLoad();

