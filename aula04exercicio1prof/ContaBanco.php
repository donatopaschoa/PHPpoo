<?php
    class ContaBanco{

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
              if($this->getTipo() == "CC"){
                $this->setSaldo(50);
              }elseif($this->getTipo() == "CP"){
                $this->setSaldo(150);
              }
        }

        public function fecharConta(){
            if($this->getSaldo() > 0){
                echo "<p>Conta ainda tem dinheiro, não posso fechá-la!</p>";
            }elseif($this->getSaldo() < 0){
                echo "<p>Conta está em débito. Impossível encerrae!</p>";
            }else{
                $this->setStatus(false);
                echo "<p>Conta de {$this->getDono()} fechada com sucesso</p>";
            }
            
        }

        public function depositar($v){
            if($this->getStatus()){
                $this->setSaldo($this->getSaldo() + $v);
                echo "<p>Depósito de $v na conta de {$this->getDono()}</p>";
            }else{
                echo "<p>Conta está fechada. Não consigo depositar.</p>";
            }
        }

        public function sacar($v){
            if($this->getStatus()){
                if($this->getSaldo() >= $v){
                    $this->setSaldo($this->getSaldo() - $v);
                    echo "<p>Saque de R$ $v autorizado na conta de {$this->getDono()}</p>";
                }else{
                    echo "<p>Saldo de {$this->getDono()} insuficiente para saque</p>";
                }
            }else{
                echo "<p>Não posso sacar de uma conta fechada.</p>";
            }
        }

        public function pagarMensal(){
            if($this->getTipo() == "CC"){
                $v = 12;
            }elseif($this->getTipo() == "CP"){
                $v = 20;
            }
            if($this->getStatus()){
                if($this->getSaldo() > $v){
                    $this->setSaldo($this->getSaldo() - $v);
                    echo "<p>Mensalidade de $v debitada da conta de {$this->getDono()}</p>";
                }else{
                    echo "<p>Saldo insuficiente</p>";
                }
            }else{
                echo "<p>Impossível pagar pois a conta está fechada</p>";
            }
        }


        // Métodos especiais: ----------------------------------------------------------------------

        public function __construct()
        {
            $this->setSaldo(0);
            $this->setStatus(false);
            echo "<p>Conta criada com sucesso!</p>";
        }

        public function setNumConta($numConta){
            $this->numConta = $numConta;
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

        public function setDono($dono){
            $this->dono = $dono;
        }

        public function getDono(){
            return $this->dono;
        }

        public function setSaldo($saldo){
            $this->saldo = $saldo;
        }

        public function getSaldo(){
            return $this->saldo;
        }

        public function setStatus($status){
            $this->status = $status;
        }

        public function getStatus(){
            return $this->status;
        }


    }


?>