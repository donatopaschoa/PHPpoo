<?php

    class ContaBanco {

        // Atributos: ---------------------------------------------------------------------
        public $numConta; 
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        // Métodos específicos: ------------------------------------------------------------

        public function abrirConta($tipo){
            $this->setTipo($tipo);
            $this->setStatus(true);
            if($tipo == "cc"){
                $this->setSaldo(50); // "$this->saldo = 50;" mesmo efeito mas foge do padrão de POO
                echo "<p>{$this->dono}, sua conta tipo cc foi aberta</p>";
            }elseif($tipo == "cp"){
                $this->setSaldo(150);
                echo "<p>{$this->dono}, sua conta tipo cp foi aberta</p>";
            }else{
                $this->saldo = 0;
                $this->status = false;
                echo "<p> {$this->dono}, favor digitar um tipo de Conta-Corrente coerente (cc ou cp)</p>";
            }
        }

        public function fecharConta(){
            if($this->status == false){
                echo "<p>{$this->dono}, você não tem conta aberta!</p>";
            }else{
                if($this->getSaldo() > 0){
                    echo "<p>{$this->dono}, seu saldo é de R$ {$this->getSaldo()}, favor realizar um saque para zerar a sua conta antes de fechá-la</p>";
                }elseif($this->getSaldo() < 0){
                        echo "<p>{$this->dono}, seu saldo é de R$ {$this->getSaldo()}, favor realizar um depósito para zerar a sua conta antes de fechá-la</p>";
                }elseif($this->saldo == 0){
                    $this->setStatus(false);
                    echo "<p>{$this->dono}, sua conta foi encerrada com sucesso!</p>";
                }
                
            }
        }

        public function depositar($val){
            if($this->status == false){
                echo "<p>{$this->dono}, você não tem conta aberta!</p>";
            }else{
                //$this->saldo += $val;
                $this->setSaldo($this->getSaldo() + $val);
                echo "<p>{$this->getDono()}, depósito de R$ $val realizado com sucesso, seu saldo é R$ {$this->getSaldo()}</p>";
            }
        }

        public function sacar($val){
            if($this->status == false){
                echo "<p>Você não tem conta aberta!</p>";
            }elseif($this->getSaldo() - $val < 0){
                    echo "<p>{$this->dono}, seu saldo de R$ {$this->getSaldo()} é insuficiente para sacar R$ $val!</p>";
                }else{
                    echo "<p>{$this->dono}, saque realizado com sucesso ({$this->getSaldo()} - $val), seu saldo atual é R$ " . ($this->saldo -= $val) ."</p>" ;
                }
        }

        public function pagarMensal(){
            $val = ($this->getTipo() == "cc") ? 12: 20;
            if($this->status == false){
                echo "<p>{$this->dono}, você não tem conta aberta!</p>";
            }else{
                if($this->getSaldo() - $val < 0){
                    echo "{$this->dono}, seu saldo de R$ {$this->getSaldo()} não é suficiente para pagar a mensalidade de R$ $val, favor realizar um depósito";
                } else{
                    echo "{$this->getDono()}, sua mensalidade de R$ $val foi cobrada, seu saldo é " .($this->saldo -= $val);
                }
                /*
                if($this->getTipo() == "cc"){
                    echo "<p>{$this->dono}, sua mensalidade de R$ 12,00 foi cobrada, seu saldo de R$ {$this->saldo} resultou em R$ " . ($this->saldo - 12) ."</p>";
                    $this->saldo -= 12;
                }elseif($this->tipo == "cp"){
                    echo "<p>{$this->dono}, sua mensalidade de R$ 20,00 foi cobrada, seu saldo de R$ {$this->saldo} resultou em R$ " . ($this->saldo - 20) ."</p>";
                    $this->saldo -= 20;
                }
                */
            }
        }

        // Métodos especiais: construtor, acessores (get) e modificadores (set): ----------------------

        public function __construct()
        {
            $this->status = false;
            $this->saldo = 0;
        }

        public function setNumConta($nconta){
            $this->numConta = $nconta;
        }

        public function getNumConta(){
            return $this->numConta;
        }

        public function setTipo($tipo){
            $this->tipo = $tipo;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function setDono($nome){
            $this->dono = $nome;
        }

        public function getDono(){
            return $this->dono;
        }

        public function setSaldo($valor){
            $this->saldo = $valor;
        }

        public function getSaldo(){
            return $this->saldo;
        }

        public function setStatus($st){
            $this->status = $st;
        }

        public function getStatus(){
            return $this->status;
        }
    }
?>