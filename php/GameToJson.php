<?php

class GameToJson {

    public static function allToJson() {
        $status = ["ok"];

        $mapUnits = self::getMapUnits();

        // =========================================================================

        $allJsonStructure = [
            'status' => $status,
            'mapUnitTypes' => $mapUnits
        ];

        return json_encode($allJsonStructure);
    }

    private static function getMapUnits() {
        $mapObjects = [];

        foreach (MapObject::$classNamesExtending as $className) {
            $mapObjects[] = MapObject::allToJson($className, false);
        }

        return $mapObjects;
//        return [
//            MapObject::allToJson(Village::class, false),
//            MapObject::allToJson(Hunters::class, false),
//        ];
    }

}
