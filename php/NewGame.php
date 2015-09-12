<?php

class NewGame {

    public static function prepareNewGame() {
        WorldGenerator::generateWorld();

        $jsonMapUnits = GameToJson::allToJson();

//echo "<br />All for map: ";
        echo $jsonMapUnits;
    }

}
