<?php
    require_once "Pessoa.php";

    class Aluno extends Pessoa {

        // Atr.
        private $matricula;    // Numérico
        private $curso;     // "Informática"

        // Mét específ.
        public function pagarMensalidade(){
            echo "<p>A mensalidade do aluno {$this->getNome()} será paga</P>";
        }

        // Mét. especiais:

        public function getMatricula(){
            return $this->matricula;
        }

        public function getCurso(){
            return $this->curso;
        }

        public function setMatricula($matr){
            $this->matricula = $matr;
        }

        public function setCurso($curso){
            $this->curso = $curso;
        }
    }
?>