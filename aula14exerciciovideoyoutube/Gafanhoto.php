<?php
    require_once "Pessoa.php";
    class Gafanhoto extends Pessoa{

        // Atributos:
        private $login;
        private $totAssistido;

        // Métodos específicos:
        function viuMaisUm(){
            $this->totAssistido ++;
        }

        // Métodos especiais construtor/get/set:
        function __construct($nome, $idade, $sexo, $login)
        {
            parent::__construct($nome, $idade, $sexo); // Chama o construtor da classe mãe de Gafanhoto (Pessoa)
            $this->login = $login;
            $this->totAssistido = 0; // O usuário está começando agora
        }
        function getLogin(){
            return $this->login;
        }

        function getTotAssistido(){
            return $this->totAssistido;
        }

        function setLogin($login){
            $this->login = $login;
        }

        function setTotAssistido($totAssistido){
            $this->totAssistido = $totAssistido;
        }
    }
?>