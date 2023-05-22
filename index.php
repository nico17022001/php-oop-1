<?php 
  class Movie {
    public $nome;
    public $durata;
    public $dataUscita;

    function __construct ($_nome, $_durata, $_dataUscita) {
      $this->nome = $_nome;
      $this->durata = $_durata;
      $this->dataUscita = $_dataUscita;
    }
  }

  $titanic = new Movie("Titanic", "3h 15m", "16 gennaio 1998");
  $spiderman = new Movie("No Way Home", "2h 28m", "15 dicembre 2021");

  var_dump($titanic);
  var_dump($spiderman);

?>