<!-- creo la classe Room, relativa alle sale cinematografiche -->
<?php

class Room {
    public $roomID;
    private $seats;
    private $screen;
}

//adesso creo un constructor, che renderà obbligatorio l'inserimento dei parametri relativi alla classe Room

public function __construct($_roomID, $_seats, $_screen){
    $this -> roomID = $_roomID;
    $this -> seats = $_seats;
    $this -> screen = $_screen;
}