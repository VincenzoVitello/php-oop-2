<?php

//creo la classe Room4d espandendo ciò che è già presente nella classe Room:
require_once __DIR__."/Room.php";

class Room4d extends Room{
   public $augmentedEffects;

public function __construct($_augmentedEffects, $_roomID ,$_seats, $_screen){ 
   parent:: __construct($_roomID ,$_seats, $_screen);
   $this -> augmentedEffects = $_augmentedEffects;
   }
}