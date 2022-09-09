<?php
// - Definire una classe ‘Movie’
//    => all'interno della classe sono dichiarate delle variabili d'istanza
//    => all'interno della classe è definito un costruttore
//    => all'interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

class Movie {
  public $id;
  public $name;
  public $description;
  public $year;
  public $genre;
  public $vintageMovie;

  public function __construct($_id, $_name, $_description, $_year, $_genre)
  {
    $this->id = $_id;
    $this->name = $_name;
    $this->description = $_description;
    $this->year = $_year;
    $this->genre = $_genre;
    $this->vintageMovie = $this->isVintage();

  }

  public function isVintage(){
    // Before 2000 the Movie is Vintage
    $year_limit = 2000;
    return $this->year < $year_limit;
  }

  public function getAbstractDescription(){
    return substr($this->description, 0, 20) . "...";
  }
}