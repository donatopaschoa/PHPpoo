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
            echo "<p> O carrro " . $this->cor ." ACIMA da velocidade máxima permitida (" . $this->velocMax . ") ";
            echo "é passível de multa! </p>";
        } else{
            echo "<p> O carro " . $this->cor . " está DENTRO da velocidade máxima permitida (" . $this->velocMax .")";
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