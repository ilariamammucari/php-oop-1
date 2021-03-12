<?php

class Movie {
    public $titolo;
    public $trama;
    public $cast;
    public $anno;

    public function __construct($_titolo) {
        $this->titolo = $_titolo;
    }
}

$film = new Movie('Harry Potter');
echo $film->titolo;