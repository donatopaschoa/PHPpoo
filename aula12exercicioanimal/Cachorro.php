<?php
    require_once "Mamifero.php";
    class Cachorro extends Mamifero{

        // Método de sobreposição:
        function emitirSom()
        {
            echo "<P>Latindo</p>";
        }

        // Métodos específicos:
        function enterraOsso(){
        echo "<p>Enterrando o osso</p>";
        }

        function abanaRabo(){
            echo "<p>Abanando o rabo</p>";
        }
    }
?>