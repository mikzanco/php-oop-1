<?php

class Movie{
    public $title;
    public $date;
    public $img;
    public $author;
    public $leadingActor;
    // public $where;

    /**
     * @param Title $title
     * @param String $date
     * @param String $author
     * @param String $leadingActor
     */

    public function __construct(Title $_title = null, $_date, $_author, $_leadingActor)
    {
        $this->title = $_title;
        $this->date = $_date;
        $this->author = $_author;
        $this->leadingActor = $_leadingActor;
    }

    // creo una funzione per calcolare da quanti giorni è uscito il film
    public function dayFrom(){
               
        $dateFilm = date_create($this->date);
        $dateNow = date_create('now');
  
        // Calculates the difference between DateTime objects
        $interval = date_diff($dateNow, $dateFilm);
        
        // Display the result
        echo $interval->format(' %R%a days ');
        
        
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