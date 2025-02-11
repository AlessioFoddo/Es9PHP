<?php

    class Persona {
        private $nome;
        private $cognome;

        public function __construct($nome, $cognome){
            $this->nome = $nome;
            $this->cognome = $cognome;
        }

        public function get_nome(){
            return $this->nome;
        }

        public function get_cognome(){
            return $this->cognome;
        }

        public function set_nome($nome){
            $this->nome = $nome;
        }

        public function set_cognome($cognome){
            $this->cognome = $cognome;
        }

        public function presentati(){
            return "Mi presento, sono ".$this->nome." ".$this->cognome;
        }
    }

?>