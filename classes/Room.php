<!-- creo la classe Room, relativa alle sale cinematografiche -->
<?php

class Room {
    public $roomID;
    private $seats;
    private $screen;
    private $screenResolution;


//adesso creo un constructor, che renderà obbligatorio l'inserimento dei parametri relativi alla classe Room
public function __construct($_roomID, $_seats, $_screen, $_screenResolution){
        $this -> roomID = $_roomID;
        $this -> seats = $_seats;
        $this -> screen = $_screen;
        $this -> screenResolution = $_screenResolution;
    }

public function getRoomSeats(){
        return $this->seats;
    }

public function getRoomScreen(){
        return $this->screen;
    }

public function getRoomScreenResolution(){
        return $this->screenResolution;
    }
};