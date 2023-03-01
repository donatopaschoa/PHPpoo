<?php
    require_once "Mamifero.php";
    class Canguru extends Mamifero{

        // Método específico:
        function usarBolsa(){
            echo "<p>Canguru entrou na bolsa</p>";
        }

        // Método de sobreposição:
        function locomover()
        {
            echo "<p>Saltando</p>";
        }
    }
?>