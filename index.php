<?php

class Movie {
    public $title;
    public $genre;
    public $orig_lang;
    public $language;

    function __construct($_title, $_genre, $_orig_lang) {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->orig_lang = $_orig_lang;
    }

    public function setLang($language) {
        return $this->language = $language;
    }
}

$movie1 = new Movie('avengers', 'action', 'english');
$movie1_title = $movie1->title;
$movie1_genre = $movie1->genre;
$movie1_orig_lang = $movie1->orig_lang;

$movie1->setLang('english');


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>Object Oriented Programing</h1>
        <h2>Movies</h2>
        <p> Title:
            <?php echo $movie1_title?>
        </p>
        <p> Genre:
            <?php echo $movie1_genre?>
        </p>
        <p> Original Lang:
            <?php echo $movie1_orig_lang?>
        </p>

    </body>
</html>
