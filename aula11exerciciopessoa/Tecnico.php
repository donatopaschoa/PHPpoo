<?php
    require_once "Aluno.php";
    class Tecnico extends Aluno{
        
        // Atributos:
        private $registroPrifissional;

        // Mét. específicos:
        public function praticar(){
            echo "<p>O técnico {$this->getNome()} está praticando todos os conceitos abordados em aula</p>";
        }

        // Mét. especiais:
        public function setRegistroProfissional($reg){
            $this->registroPrifissional = $reg;
        }

        public function getRegistroProfissional(){
            return $this->registroPrifissional;
        }
    }
?>