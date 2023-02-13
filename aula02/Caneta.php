<?php

class Caneta {

    // Atributos:
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    // Métodos:
    public function rabiscar(){
        if ($this->tampada == true){ 
            echo "<p> Erro, não posso rabiscar</p>";
        }else{
            echo "<p>Estou rabiscando...</p>";
        }
        
    }

    public function tampar(){
        $this->tampada = true;
    }

    private function destampar(){
        $this->tampada = false;
    }
}

?>
