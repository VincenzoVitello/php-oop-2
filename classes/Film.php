<?php
//creo classe Film

class Film{
    private $title;
    private $director;
    private $screenTime;
    private $actors;
}
public function __construct($_title, $_director, $_screenTime, $_actors){
    $this -> $title = $_title;
    $this -> $director = $_director;
    $this -> $screenTime = $_screenTime;
    $this -> $actors = $_actors;
}