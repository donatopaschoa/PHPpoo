<?php
    require_once "Animal.php";
    class Ave extends Animal{
        // Atributos:
        private $corPena;

        // Métodos herdados - Animal
        function alimentar()
        {
            echo "<p>Comendo frutas</p>";
        }

        function locomover()
        {
            echo "<p>Voando</p>";
        }

        function emitirSom()
        {
            echo "<p>Som da Ave</p>";
        }

        // Métodos especiais:
        function getCorPena(){
            return $this->corPena;
        }

        function setCorPena($cor){
            $this->corPena = $cor;
        }

        // Métodos específicos:
        function fazerNinho(){
            echo "Construindo um ninho";
        }
    }
?>