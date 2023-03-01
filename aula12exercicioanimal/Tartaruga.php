<?php
    require_once "Reptil.php";
    class Tartaruga extends Reptil{ 

        // Método de sobreposição:
        function locomover()
        {
            echo "<p>Andando bem devagar</p>";
        }

    }
?>