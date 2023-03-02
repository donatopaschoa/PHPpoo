<?php
    require_once "Mamifero.php";
    class Lobo extends Mamifero{
        
        // Sobreposição de método:
        function emitirSom()
        {
            echo "<p>Auuuuuuuuu!</p>";
        }
    }
?>