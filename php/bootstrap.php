<?php

ini_set('xdebug.var_display_max_depth', 10);

function get_static_of_class($class, $staticPropetyName) {
    $classObject = new ReflectionClass($class);
    return $classObject->getStaticPropertyValue($staticPropetyName);
}
