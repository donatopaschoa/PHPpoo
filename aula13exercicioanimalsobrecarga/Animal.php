<?php
    abstract class Animal{
        
        private $peso;
        private $idade;
        private $membros;

        // Métodos abstratos não são desenvolvidos nesta classe, somente nas filhas
        abstract function emitirSom();

        // Métodos especiais:
        function getPeso(){
            return $this->peso;
        }

        function getIdade(){
            return $this->idade;
        }

        function getMembros(){
            return $this->membros;
        }

        function setPeso($p){
            $this->peso = $p;
        }

        function setIdade($idade){
            $this->idade = $idade;
        }

        function setMembros($membros){
            $this->membros = $membros;
        }
    }
?>