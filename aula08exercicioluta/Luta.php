<?php

    require_once "Lutador.php";
    class Luta{

        // Esta classe não há construtor, somente get/set

        // Atributos:
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        // Métodos públicos: 

        public function marcarLuta($L1, $L2){
            if(($L1->getCategoria() == $L2->getCategoria()) && ($L1 != $L2)){
                $this->aprovada = true;
                $this->desafiado = $L1;
                $this->desafiante = $L2;
            }else{
                $this->aprovada = false;
                $this->desafiado = null;
                $this->desafiante = null;
            }
        }

        public function lutar(){
            if($this->aprovada){
                $this->desafiado->apresentar();
                $this->desafiante->apresentar();
                $vencedor = rand(0, 2);
                switch($vencedor){
                    case 0:
                        // Empate para os dois:
                        echo "<p>-----------------------------------------------------------------</p>";
                        echo "<p>Teve empate!</p>";
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();
                        break;
                    case 1:
                        // O Desafiado ganhou":
                        echo "<p>-----------------------------------------------------------------</p>";
                        echo "<p>O {$this->desafiado->getNome()} Venceu!</p>";
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                        break;
                    case 2:
                        // O Desafiante ganhou
                        echo "<p>-----------------------------------------------------------------</p>";
                        echo "<p>O {$this->desafiante->getNome()} Venceu!</p>";
                        $this->desafiado->perderLuta();
                        $this->desafiante->ganharLuta();
                        break;
                }
            }else{
                echo "<p>A Luta não pode acontecer</p>";
            }

        }

        // Métodos especiais get/set:

        public function getDesafiado(){
            return $this->desafiado;
        }

        public function getDesafiante(){
            return $this->desafiante;
        }
        public function getRounds(){
            return $this->rounds;
        }
        public function getAprovado(){
            return $this->aprovada;
        }

        public function setDesafiado($desafiado){
            $this->desafiado = $desafiado;
        }

        public function setDesafiante($desafiante){
            $this->desafiante = $desafiante;
        }

        public function setRounds($r){
            $this->rounds = $r;
        }

        public function setAprovado($apr){
            $this->aprovada = $apr;
        }


    }
?>