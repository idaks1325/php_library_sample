<?php
class NoNamedSample1 {
    public $array = [];
    public function add() {
        $this->array[] = 'OK';
    }

    public function get():array {
        return $this->array;
    }
}
