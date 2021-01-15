<?php

class Movie {
    public $title;
    public $genre;
    public $language;

    function __construct($_title, $_genre, $_language) {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->language = $_language;
    }
}

$movie1 = new Movie('avengers', 'action', 'english');


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>Object Oriented Programing</h1>
        
    </body>
</html>
