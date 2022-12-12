<?php

class Title{
    public $title;
    public $subtitle;

    /**
     * @param String $title
     * @param String $subtitle
     */
    public function __construct($_title, $_subtitle)
    {
        $this->title = $_title;
        $this->subtitle = $_subtitle;
    }
}