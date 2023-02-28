<?php
    abstract class Pessoa {

        // Atributos:
        private $nome;
        private $idade;
        private $sexo;

        // Métodos específicos: 
        public final function fazerAniv(){ // >> "final" antes do "function não permite sobrecarga
            $this->idade ++;
        }

        // Métodos especiais get/set:

        public function getNome(){
            return $this->nome;
        }

        public function getIdade(){
            return $this->idade;
        }

        public function getSexo(){
            return $this->sexo;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setIdade($idade){
            $this->idade = $idade;
        }

        public function setSexo($sexo){
            $this->sexo = $sexo;
        }
    }
?>