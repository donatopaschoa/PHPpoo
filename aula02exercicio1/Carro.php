<?php

class carro{

    // Atributos:
    var $cor;
    var $fabricante;
    var $modelo;
    var $ano;
    var $veloc;
    var $velocMax;

    // Métodos:
    function acelerar($vel){
       $this->informativo($vel);
    }

    function parar() {
        $this->informativo(0);
    }

    function estacionar() {
        $this->informativo(0);
    }

    function informativo($vel){

        $this->veloc = $vel;

        if($this->veloc > $this->velocMax){
            echo "<p> O carrro " . $this->cor ." está <strong>ACIMA</strong> da velocidade máxima permitida (" . $this->velocMax . ")";
            echo ", <strong>CORRE O RISCO</strong> de ser multado pois está a " . $this->veloc . "Km/h </p>";
        } elseif (($this->veloc > 0) && ($this->veloc < $this->velocMax)){
            echo "<p> O carro " . $this->cor . " está <strong>DENTRO</strong> da velocidade máxima permitida (" . $this->velocMax .")";
            echo ", está a " . $this->veloc ."Km/h </p>";
        } elseif($this->veloc == 0) {
            echo "<p>O carro " . $this->cor ." está parado</p>";
        } else {echo "Erro de leitura de velocidade";}
        
    }



}

?>