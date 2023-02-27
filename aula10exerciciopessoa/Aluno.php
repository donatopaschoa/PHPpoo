<?php
    require_once "Pessoa.php";

    class Aluno extends Pessoa {

        // Atr.
        private $matr;
        private $curso;

        // Mét específ.
        public function cancelarMatr(){
            echo "<p>A matrícula será cancelada</P>";
            $this->setMatricula(false);
        }

        // Mét. especiais:

        public function getMatricula(){
            return $this->matr;
        }

        public function getCurso(){
            return $this->curso;
        }

        public function setMatricula($matr){
            $this->matr = $matr;
        }

        public function setCurso($curso){
            $this->curso = $curso;
        }



    }
?>