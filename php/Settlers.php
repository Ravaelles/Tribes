<?php

class Settlers extends Object {

    public $x;
    public $y;
    public $people;

    function __construct($x, $y) {
        parent::__construct();
        $this->x = $x;
        $this->y = $y;
    }

    function people($newPeople = null) {
        if ($newPeople !== null) {
            $this->people = $newPeople;
        }
        return (int) $this->people;
    }

}
