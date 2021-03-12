<?php

class Movie {
    public $titolo;
    public $trama;
    public $cast;
    public $anno;
    public $regista;
    public $distribuzione;
    private $sconto_ciema = 'Non hai nessuno sconto';
    public $eta_utente;

    public function __construct($_titolo,$_eta_utente) {
        $this->titolo = $_titolo;
        $this->eta_utente = $_eta_utente;
    }

    public function setSconto($eta){
        if ($eta <= 16){
            $this->sconto_ciema = 50;
        }
    }

    public function getSconto() {
        return $this->sconto_ciema;
    }
}

$film_1 = new Movie('Harry Potter', 13);
$film_1->cast = 'Daniel Radcliffe, Emma Watson, Rupert Grint';
$film_1->distribuzione = 'Warner Bros';
$film_1->setSconto($film_1->eta_utente);

$film_2 = new Movie('Il matrimonio del mio migliore amico', 28);
$film_2->cast = 'Julia Roberts, Dermot Mulroney, Cameron Diaz';
$film_2->regista = 'P. J. Hogan';
$film_2->setSconto($film_2->eta_utente);

$films = [$film_1,$film_2];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>
</head>

<body>
    <h1>Film:</h1>
    <div class="film">
        <?php foreach ( $films as $film ){ ?>
            <h2><?= $film->titolo ?></h2>
            <p>Cast: <?= $film->cast ?></p>
            <p>Sconto cinema: <?= $film->getSconto() ?></p>
        <?php } ?>
    </div>
</body>

</html>