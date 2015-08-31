<?php

class MapPainter {

    public static function paint() {
        $return = [];
        $return["villages"] = self::villages();
        return json_encode($return);
    }

    // =========================================================================

    private static function villages() {
        $return = [];

        foreach (Object::all(Village::class) as $village) {
            $return[] = $village;
        }

        return $return;
    }

}
