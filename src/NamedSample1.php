<?php
namespace Named;

class NamedSample1 {
    public $array = [];
    public function add() {
        $this->array[] = 'Named';
    }

    public function get():array {
        return $this->array;
    }
}
