<?php
    require_once "Lobo.php";
    class Cachorro extends Lobo{

        // Método de sobreposição:
        function emitirSom()
        {
            echo "<P>Au!Au!Au!</p>";
        }

        // Exemplo de Polimorfismo de Sobrecarga (O PHP não aceita Sobrecarga):
        // Dois ou mais métodos c/ o mesmo nome na mesma classe com
        // assinaturas diferentes (qtde d atributos e tipos diferentes):
        function reagirFrase($frase){
            if($frase == "Toma comida" or $frase == "Olá"){
                echo "<p>Abanar e latir</p>";
            }else{
                echo "<p>Rosnar</p>";
            }
        }

        function reagirHora($hora, $minutos){
            if($hora < 12){
                echo "<p>Abanar</p>";
            }elseif($hora > 18){
                echo "<p>Ignorar</p>";
            }else{
                echo "<p>Abanar e latir</p>";
            }
        }

        function reagirDono($dono){ // True ou false
            if($dono){
                echo "<p>Abanar</p>";
            }else{
                echo "<p>Rosnar e latir</p>";
            }

        }

        function reagirIdadePeso($idade, $peso){
            if($idade < 5){
                if($peso <10){
                    echo "<p>Abanar</p>";
                }else{
                    echo "<p>Latir</p>";
                }
            }else{
                if($peso < 10){
                    echo "<p>Rosnar</p>";
                }else{
                    echo "<p>Ignorar</p>";
                }
            }
        }
    }
?>