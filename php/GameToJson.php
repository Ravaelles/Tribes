<?php

class GameToJson {

    public static function allToJson() {
        $status = ["ok"];

        $mapUnits = self::getMapUnits();

        // =========================================================================

        $allJsonStructure = [
            'status' => $status,
            'mapUnits' => $mapUnits
        ];

        return json_encode($allJsonStructure);
    }

    private static function getMapUnits() {
        $village = MapObject::allToJson(Village::class, false);
        return [$village];
    }

//    public static function paint() {
//        self::paintVillages();
//    }
//
//    // =========================================================================
//
//    private static function paintVillages() {
//        $return = [];
//
//        foreach (Object::all(Village::class) as $village) {
//            $return[] = $village->json();
//        }
//
//        return $return;
//    }
}
