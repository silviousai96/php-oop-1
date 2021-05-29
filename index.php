<?php

class User {
    public $nome;

    public $cognome;

    public $email;

    public $eta;

    public $sesso;

    public function __construct($nome, $cognome, $email, $eta, $sesso) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->email = $email;
        $this->eta = $eta;
        $this->sesso = $sesso;

    }

    public function getInfo() {
        return "Nome: " .$this->nome . "<br>" .
        "Cognome: " . $this->cognome . "<br>" . 
        "Email: " . $this->email . "<br>" .
        "Età: " . $this->eta . "<br>" .
        "Sesso: " . $this->sesso . "<br>";

    }

}



$user1 = new User("Silvio", "Usai", "silvio@live.it", "25", "maschio");

$user2 = new User("Francesca", "De Girolamo", "kekka95@gmail.com", "26", "femmina");

$user3 = new User("Marco", "Rossi", "lionheart@hotmail.it", "31", "maschio");


echo $user1->getInfo(); 
echo $user2->getInfo(); 
echo $user3->getInfo(); 



?>