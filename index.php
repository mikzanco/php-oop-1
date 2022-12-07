<?php

$film1 = new Movie("John Wick","22 gen 2015", "Chad Stahelski", "Keanu Reeves");
$film2 = new Movie("Avatar 2", "14 dic 2022", "James Cameron", "Sam Worthington");

$filmList = [$film1, $film2];
class Movie{
    public $title;
    public $date;
    public $author;
    public $firstActor;
    // public $where;


    public function __construct($_title, $_date, $_author, $_firstActor)
    {
        $this->title = $_title;
        $this->date = $_date;
        $this->author = $_author;
        $this->firstActor = $_firstActor;
    }

    // creo una funzione per calcolare da quanti giorni è uscito il film
    public function dayFrom(){

    }
}
var_dump($filmList);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>php-oop-1</title>
</head>
<body>
    
</body>
</html>