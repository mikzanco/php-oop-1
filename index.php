<?php

$film1 = new Movie("John Wick","22 gen 2015", "Chad Stahelski", "Keanu Reeves");
$film2 = new Movie("Avatar 2", "14 dic 2022", "James Cameron", "Sam Worthington");

$film1->setImg("https://www.sentieridelcinema.it/wp-content/uploads/2016/03/EM7mrES6qpFJMPfNufC4Of8jVuMmZYOkdcv7.jpg");
$film2->setImg("https://i0.wp.com/www.badtaste.it/cinema/wp-content/uploads/sites/1/2022/11/avatar-2-la-via-dellacqua-poster.jpg?fit=1200%2C1501&quality=85&strip=all&ssl=1");

$filmList = [$film1, $film2];
class Movie{
    public $title;
    public $date;
    public $img;
    public $author;
    public $leadingActor;
    // public $where;

    /**
     * @param String = $title
     * @param String = $date
     * @param String = $author
     * @param String = $leadingActor
     */

    public function __construct($_title, $_date, $_author, $_leadingActor)
    {
        $this->title = $_title;
        $this->date = $_date;
        $this->author = $_author;
        $this->leadingActor = $_leadingActor;
    }

    // creo una funzione per calcolare da quanti giorni è uscito il film
    public function dayFrom(){

    }

    public function setImg($_img){
        $this->img = $_img;
    }

    public function getImg(){

        $placeholder = 'https://t4.ftcdn.net/jpg/05/07/58/41/360_F_507584110_KNIfe7d3hUAEpraq10J7MCPmtny8EH7A.jpg';

        if($this->img){
            return $this->img;
        }
        return $placeholder;
    }
}
// var_dump($filmList);

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
    <table class="table w-75 m-auto text-center my-5">
        <thead>
            <tr>
            <th scope="col">Titolo</th>
            <th scope="col">Data di Uscita</th>
            <th scope="col">Poster</th>
            <th scope="col">Autore</th>
            <th scope="col">Protagonista</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($filmList as $film) : ?>
                <tr>
                    <td><?php echo $film->title ?></td>
                    <td><?php echo $film->date ?></td>
                    <td><img class="img-thumbnail" src="<?php echo $film->getImg() ?>"></td>
                    <td><?php echo $film->author ?></td>
                    <td><?php echo $film->leadingActor ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>