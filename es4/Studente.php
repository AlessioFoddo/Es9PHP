<?php

    require_once("Persona.php");

    class Studente extends Persona {
        private $matricola;

        public function __construct($nome, $cognome, $matricola){
            $this->nome = $nome;
            $this->cognome = $cognome;
            $this->matricola = $matricola;
        }

        public function get_matricola(){
            return $this->matricola;
        }

        public function set_matricola($matricola){
            $this->matricola = $matricola;
        }

        public function presentati(){
            return "Mi presento, sono ".$this->nome." ".$this->cognome." e ho matricola: ".$this->matricola;
        }
    }

?>