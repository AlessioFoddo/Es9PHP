<?php

    require_once("Veicolo.php");

    class Automobile extends Veicolo {
        private $modello;

        public function __construct($marca, $anno, $modello){
            $this->marca = $marca;
            $this->anno = $anno;
            $this->modello = $modello;
        }

        public function get_modello(){
            return $this->modello;
        }

        public function set_modello($modello){
            $this->modello = $modello;
        }

        public function printInfo(){
            return $this->marca." - ".$this->anno." - ".$this->modello;
        }
    }

?>