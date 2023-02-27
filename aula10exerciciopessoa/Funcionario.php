<?php
    require_once "Pessoa.php";

    class Funcionario extends Pessoa{

        // Atributos:
        private $setor;
        private $trabalhando;

        // Mét. específico:
        public function mudarTrabalho(){
            $this->trabalhando = ! $this->trabalhando;
        }

        // Mét. especiais:

        public function getSetor(){
            return $this->setor;
        }

        public function getTrabalhanso(){
            return $this->trabalhando;
        }

        public function setSetor($setor){
            $this->setor = $setor;
        }

        public function setTrabalhando($trabalhando){
            $this->trabalhando = $trabalhando;
        }

    }
?>