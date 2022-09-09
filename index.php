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
};

// Movies data
$data_1 = [
  'id' => 1,
  'name' => 'Il signore degli anelli',
  'description' => 'Un giovane hobbit e un variegato gruppo, composto da umani, un nano, un elfo e altri hobbit, partono per un delicata missione, guidati dal potente mago Gandalf. Devono distruggere un anello magico e sconfiggere il malvagio Sauron.',
  'year' => 2002,
  'genre' => 'Avventura'
];
$data_2 = [
  'id' => 2,
  'name' => 'Il grande Lebowski',
  'description' => 'Drugo è un disoccupato giocatore di bowling rimasto legato agli anni Settanta, che si trova coinvolto in un doppio complotto per un puro caso di omonimia.',
  'year' => 1998,
  'genre' => 'Commedia'
];

// Creating Movie Object
$movie_1 = new Movie($data_1['id'], $data_1['name'], $data_1['description'], $data_1['year'], $data_1['genre']);
$movie_2 = new Movie($data_2['id'], $data_2['name'], $data_2['description'], $data_2['year'], $data_2['genre']);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Stylesheet -->
  <link rel="stylesheet" href="style.css">
  <title>Movie OOP</title>
</head>
<body>
  <h1>List of Movies</h1>
  <table>
    <thead>
      <th>ID</th>
      <th>Name</th>
      <th>Description</th>
      <th>Year</th>
      <th>Genre</th>
      <th>Is Vintage?</th>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $movie_1->id?></td>
        <td><?php echo $movie_1->name?></td>
        <td><?php echo $movie_1->getAbstractDescription()?></td>
        <td><?php echo $movie_1->year?></td>
        <td><?php echo $movie_1->genre?></td>
        <td><?php echo $movie_1->vintageMovie ? 'Yes' : 'No'?></td>
      </tr>
      <tr>
        <td><?php echo $movie_2->id?></td>
        <td><?php echo $movie_2->name?></td>
        <td><?php echo $movie_2->getAbstractDescription()?></td>
        <td><?php echo $movie_2->year?></td>
        <td><?php echo $movie_2->genre?></td>
        <td><?php echo $movie_2->vintageMovie ? 'Yes' : 'No'?></td>
      </tr>
    </tbody>
  </table>
</body>
</html>