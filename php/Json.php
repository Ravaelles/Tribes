<?php

class Json {

    private $object;
    private $params = [];

    // =========================================================================

    public static function createFor(Object $object) {
        $json = new Json();
        $json->object = $object;
        return $json;
    }

    // =========================================================================

    public function generateJson($useJsonNotArray = false) {
        foreach ($this->object as $property => $value) {
            if (!$this->skipProperty($property)) {
                $this->params[$property] = $value;
            }
        }

        return $useJsonNotArray ? $this->params : json_encode($this->params);
    }

    public function addProperty($propertyName) {
        $this->params[$propertyName] = $object->$propertyName;
    }

    private function skipProperty($property) {
        return $property === 'json';
    }

}
