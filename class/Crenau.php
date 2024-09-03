<?php
class Crenau{
    public $debut;

    public $fin;
    public function __contruct (int $debut, int $fin ){
        $this->debut = $debut;
        $this->fin = $fin;
    }
    public function inclusHeure(int $heure): bool 
    {
        return $heure >= $this->debut && $heure <= $this->fin;
    }
}


















?>