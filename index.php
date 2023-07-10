<?php
class Genre
{
    public $name;
    public function _construct($name)
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

    public function _construct($title, $year, Genre $genre, $length)
    {
        $this->title = $title;
        $this->year = $year;
        $this->genre = $genre;
        $this->length = $length;
    }
}
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