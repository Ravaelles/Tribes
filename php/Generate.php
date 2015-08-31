<?php

class Generate {

    public static function village() {
        $village = new Village(rand(1, 1000), rand(1, 1000));
        $village->people(rand(32, 76));
    }

    public static function settlers() {
        $settlers = new Settlers(rand(1, 1000), rand(1, 1000));
        $settlers->people(rand(32, 76));
    }

}
