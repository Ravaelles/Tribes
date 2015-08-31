<?php

class MapObject extends Object {

    public $x;
    public $y;

    // =========================================================================

    function __construct() {
        parent::__construct();
        $this->json = Json::createFor($this);
    }

    // =========================================================================

    public function json() {
        return $this->json->generateJson();
    }

}
