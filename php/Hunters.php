<?php

class Hunters extends MapObject {

    public static $image = "hunters/1.png";
    public static $imageSize = [64, 64];
    // =========================================================================

    public $cssClassName = "hunters";
    public $people;

    // =========================================================================

    function __construct($x, $y) {
        parent::__construct();
        $this->x = $x;
        $this->y = $y;
    }

    // =========================================================================

    function people($newPeople = null) {
        if ($newPeople !== null) {
            $this->people = $newPeople;
        }
        return (int) $this->people;
    }

}
