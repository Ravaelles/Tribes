<?php

class WorldGenerator {

    public static function generateWorld() {
        $numOfVillages = 10;
        $numOfHunters = 15;

        // =========================================================================

        for ($i = 0; $i < $numOfVillages; $i++) {
            self::village();
        }
        for ($i = 0; $i < $numOfHunters; $i++) {
            self::hunters();
        }
    }

    // =========================================================================

    public static function village() {
        $village = new Village(rand(1, 1000), rand(1, 1000));
        $village->people(rand(32, 76));
        return $village;
    }

    public static function hunters() {
        $hunters = new Hunters(rand(1, 1000), rand(1, 1000));
        $hunters->people(rand(2, 7));
        return $hunters;
    }

    public static function settlers() {
        $settlers = new Settlers(rand(1, 1000), rand(1, 1000));
        $settlers->people(rand(32, 76));
        return $settlers;
    }

}
