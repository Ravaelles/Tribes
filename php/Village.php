<?php

class Village extends MapObject {

    public static $image = "villages/indian_camp.png";
    public static $imageSize = [80, 45];
    // =========================================================================

    public $cssClassName = "village";
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
