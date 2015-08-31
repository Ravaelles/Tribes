<?php

class Json {

    private $object;
    private $params = [];

    public static function createFor(Object $object) {
        $json = new Json();
        $json->object = $object;
        return $json;
    }

    // =========================================================================

    public function generateJson() {
        echo "<br />generating json ## ";

        foreach ($this->object as $property => $value) {
            if (!$this->skipProperty($property)) {
                $this->params[$property] = $value;
            }
        }

        return json_encode($this->params);
    }

    public function addProperty($propertyName) {
        $this->params[$propertyName] = $object->$propertyName;
    }

    private function skipProperty($property) {
        return $property === 'json';
    }

}
