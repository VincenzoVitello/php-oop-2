<?php

class Actor {
    public $name;
    public $surname;
    public $birthday;

public function __construct($_name, $_surname, $_birthday){
        $this -> name = $_name;
        $this -> surname = $_surname;
        $this -> birthday = $_birthday;
    }
}