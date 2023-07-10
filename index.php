<?php
class Genre
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Movie
{
    public $title;
    public $year;
    public $genre;
    public $length;
    public $rating;

    public function __construct($title, $year, Genre $genre, $length)
    {
        $this->title = $title;
        $this->year = $year;
        $this->genre = $genre;
        $this->length = $length;
    }

    public function getMovieDetails()
    {
        $string = "Movie: " . $this->title . ";<br/> Genre: " . $this->genre->name . ";<br/> Year: " . $this->year . ";<br/> Length: " . $this->length;

        if ($this->rating != NULL) {
            $string .= ";<br/> Rating: " . $this->rating;
        }
        return $string;
    }
}

//CREO OGGETTI DELLA CLASSE
$avengers = new Movie('Avengers', '2012', new Genre('Fantascienza'), 142);
$avengers->rating = 8;

$avatar = new Movie('Avatar', '2009', new Genre('Avventura'), 162);
$avatar->rating = 8;


//STAMPO A SCHERMO
echo $avengers->getMovieDetails();
echo "<br/><hr/>";
echo $avatar->getMovieDetails();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>

<body>

</body>

</html>