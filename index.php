<?php

  /*- è definita una classe ‘Movie’
    => all'interno della classe sono dichiarati degli attributi
    => all'interno della classe è definito un costruttore
    => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà*/

//Classe & attributi

class movie {
    public $titolo;
    public $genere;
    public $categoria;
    public $casaProduzione;

    //costruttore

    function __construct($titolo, $genere, $categoria, $casaProduzione){
        $this->titolo = $titolo;
        $this->genere = $genere;
        $this->categoria = $categoria;
        $this->casaProduzione = $casaProduzione; 
    } 

    //metodo
    public function getCategoria(){
        return $this->categoria;
    }
}

//istanza

$movie1 = new Movie('Star Wars', 'Fantascienza, Avventura, Azione', 'Lungometraggio','Lucasfilm');
// $movie1->titolo = 'Star Wars';
// $movie1->genere = 'Fantascienza,Avventura,Azione';
// $movie1->categoria = 'Lungometraggio';
// $movie1->casaProduzione = 'Lucasfilm';
// var_dump($movie1);


//istanza 2
$movie2 = new Movie('Il gioco di Geri', 'Animazione', 'Cortometraggio','Pixar Animation Studios');



 // stampa a schermo

 echo '<h1> Titolo del film: '. $movie1->titolo . '</h1> ',
      '<h2> Genere: '. $movie1->genere . '</h2> ',
      '<h2> Categoria: '. $movie1->getCategoria() . '</h2> ',
      '<h2> Casa di Produzione: '. $movie1->casaProduzione . '</h2> ';

      echo '<h1> Titolo del film: '. $movie2->titolo . '</h1> ',
      '<h2> Genere: '. $movie2->genere . '</h2> ',
      '<h2> Categoria: '. $movie2->getCategoria() . '</h2> ',
      '<h2> Casa di Produzione: '. $movie2->casaProduzione . '</h2> ';