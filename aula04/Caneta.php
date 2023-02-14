<?php

    /*
        Diagrama de classe: 

        --------------
           Caneta
        --------------
        + modelo
        - ponta
        - cor
        - tampada
        --------------
        + getModelo()
        + setModelo(m)
        + getPonta()
        + setPonta(p)
        + tampar()
        --------------
    */

    class caneta{

        // Atributos:
        private $modelo;
        private $ponta;
        public $cor;
        private $tampada;

        // Acessores get e modificadores set:
        public function getModelo(){
            return $this->modelo;
        }

        public function setModelo($m){
            $this->modelo = $m;
        }

        public function getPonta(){
            return $this->ponta;
        }

        public function setPonta($p){
            $this->ponta = $p;
        }

        public function tampar(){
            $this->tampada = true;
        }

        /*
        // Construtor 1: os valores são definidos diretamente dentro da classe:
        public function __construct(){
            $this->cor = "Azul";
            $this-> tampar();
        }
        */

        // Construtor 2: os atributos são recebidos externamente:
        public function __construct($mod, $c, $p)
        {
            $this->modelo = $mod;
            $this->cor = $c;
            $this->ponta = $p;
        }
        

    }


?>