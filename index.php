<!-- è definita una classe ‘Movie’ => all'interno della classe sono dichiarate delle variabili d'istanza => all'interno della classe è definito un costruttore => all'interno della classe è definito almeno un metodo -->
<!-- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php

class Movie{
    public $title;
    public $duration;
    public $shortLong = "short";
    public $main_character;
    public $gross = 0;
    public $original_lang;

    function __construct($_title){
        $this->title = $_title;
    }

    public function setLongShort($_duration){
        $this->duration = $_duration;
        if($this->duration > 120){
            $this->shortLong = "Long";
        }
        return $this->shortLong;
    }


}

$up = new Movie("Up");
$up->main_character = "Old Man";
$up->original_lang = "eng";


$up->setLongShort(130);

var_dump($up);

$findingNemo = new Movie("Finding Nemo");
$findingNemo-> main_character = "Nemo";
$findingNemo->original_lang = "eng";

$findingNemo->setLongShort(120);

var_dump($findingNemo);