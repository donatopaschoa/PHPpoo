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
        $this->veloc = $vel;

        if($this->veloc > $this->velocMax){
            echo "<p> O carrro " . $this->cor ." está ACIMA da velocidade máxima permitida (" . $this->velocMax . ")";
            echo ", <strong>CORRE O RISCO</strong> de ser multado pois está a " . $this->veloc . "Km/h </p>";
        } else{
            echo "<p> O carro " . $this->cor . " está DENTRO da velocidade máxima permitida (" . $this->velocMax .")";
            echo ", está a " . $this->veloc ."Km/h </p>";
        }
    }

    function parar() {

    }

    function buzinar() {

    }

    function estacionar() {

    }



}

?>