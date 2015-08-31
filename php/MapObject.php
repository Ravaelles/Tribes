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


    public static function allToJson($class, $useJsonNotArray = true) {

        // Create array of all objects
        $objects = [];
        foreach (self::all($class) as $object) {
            $objects[] = $object->json();
        }

        // Give it proper structure
        $image = get_static_of_class($class, 'image');
        $imageSize = get_static_of_class($class, 'imageSize');
        $structuredArray = [
            'image' => $image,
            'imageSize' => $imageSize,
            'objects' => $objects
        ];

        return $useJsonNotArray ? json_encode($structuredArray) : $structuredArray;
    }

    // =========================================================================

    public function json() {
        return $this->json->generateJson(true);
    }

}
