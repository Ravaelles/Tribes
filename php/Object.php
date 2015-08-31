<?php

class Object {

    public static $all = [];

    // =========================================================================

    function __construct() {
        self::$all[get_class($this)][] = $this;
    }

    // =========================================================================

    public static function all($class) {
        return self::$all[$class];
    }

}
