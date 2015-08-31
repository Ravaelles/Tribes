<?php

class MapPainter {

    public static function paint() {
        self::paintVillages();
    }

    // =========================================================================

    private static function paintVillages() {
        $return = [];

        foreach (Object::all(Village::class) as $village) {
            $return[] = $village->json();
        }

        return $return;
    }

}
