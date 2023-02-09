<?php

class Caneta {

    // Atributos:
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    // Métodos:
    function rabiscar(){
        if ($this->tampada == true){ 
        // >> comparando atributos dentro de uma classe, não colocar "$" e usar "$this->"
            echo "<p> Erro, não posso rabiscar</p>";
        }else{
            echo "<p>Estou rabiscando...</p>";
        }
        
    }

    function tampar(){
        $this->tampada = true;
        // Este método está modificando o atributo c/ "$this"
    }

    function destampar(){
        $this->tampada = false;
    }
}

?>
