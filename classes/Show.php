<?php

//creo la classe Show, relativa agli spettacoli che verranno riprodotti nelle varie sale
class Show {
    private $film;
    private $date;
    private $hour;
    private $room;
     // all'interno di index.php verrà passata l'istanza dell'oggetto appartenente alla classe room (?)
}
public function __construct($_film, $_date, $_hour, $_room){
    $this -> $film = $_film;
    $this -> $date = $_date;
    $this -> $hour = $_hour;
    $this -> $room = $_room;
}
