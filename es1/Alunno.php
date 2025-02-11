<?php

    class Alunno {
        private $nome;
        private $cognome;
        private $eta;

        public function __construct($nome, $cognome, $eta){
            $this->nome = $nome;
            $this->cognome = $cognome;
            $this->eta = $eta;
        }

        public function get_Nome(){
            return $this->nome;
        }

        public function get_Cognome(){
            return $this->cognome;
        }

        public function get_Eta(){
            return $this->eta;
        }

        public function set_Nome($nome){
            $this->nome = $nome;
        }

        public function set_Cognome($cognome){
            $this->cognome = $cognome;
        }

        public function set_Eta($eta){
            $this->eta = $eta;
        }

        public function printInfo(){
            return $this->nome." - ".$this->cognome." - ".$this->eta;
        }
    }

?>