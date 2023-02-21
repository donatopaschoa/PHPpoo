<?php

    /*
    Diagrama de classe:

    ----------------
    Lutador
    ----------------
    - nome
    - nacionalidade
    - idade
    - altura
    - peso
    - categoria
    - vitorias
    - derrotas
    - empates
    ---------------- 		>> Métodos específicos
    + apresentar()
    + status()
    + ganharLuta()
    + perderLuta()
    + empatarLuta()
    ----------------       >> Métodos especiais
    */

    class Lutador{
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        // Métodos específicos: ---------

        public function apresentar(){ // É anunciado pelo apresentador dentro do ring ao microfone
            echo "<br>Lutador: {$this->getNome()}<br>";
            echo "Origem: {$this->getNacionalidade()} <br>";
            echo "{$this->idade} anos<br>";
            echo "{$this->getAltura()} m de altura<br>";
            echo "Pesando {$this->getPeso()} Kg<br>";
            echo "Ganhou {$this->getVitorias()}<br>";
            echo "Perdeu {$this->getDerrotas()}<br>";
            echo "Empatou {$this->getEmpates()}<br>";
        }

        public function status(){ // Barra que mostra no rodapé do vídeo
            echo "<br>{$this->getNome()} é um peso {$this->getCategoria()}, {$this->getVitorias()} vitórias, {$this->getDerrotas()} derrotas, {$this->getEmpates()} empates<br>";
        }
        
        public function ganharLuta(){
            $this->setVitorias($this->getVitorias() + 1);
        }

        public function perderLuta(){
            $this->setDerrotas(($this->getDerrotas() + 1));
        }

        public function empatarLuta(){
            $this->setEmpates($this->getEmpates() + 1);
        }

        // Métodos especiais: ---------

        public function __construct(
                            $nome,
                            $nac,
                            $id,
                            $alt,
                            $peso,
                            $vit,
                            $der,
                            $emp)
        {
            $this->nome = $nome;
            $this->nacionalidade = $nac;
            $this->idade = $id;
            $this->altura = $alt;
            $this->peso = $peso;
            $this->vitorias = $vit;
            $this->derrotas = $der;
            $this->empates = $emp;

            // Atualzando o atributo "categoria" ao chamar "setPeso()":
            $this->setPeso($peso);
        }

        private function getNome(){
            return $this->nome;
        }

        private function getNacionalidade(){
            return $this->nacionalidade;
        }

        private function getIdade(){
            return $this->idade;
        }

        private function getAltura(){
            return $this->altura;
        }

        private function getPeso(){
            return $this->peso;
        }

        private function getCategoria(){
            return $this->categoria;
        }

        private function getVitorias(){
            return $this->vitorias;
        }

        private function getDerrotas(){
            return $this->derrotas;
        }

        private function getEmpates(){
            return $this->empates;
        }

        // ---------------------------

        private function setNome($no){
            $this->nome = $no;
        }

        private function setNacionalidade($nac){
            $this->nacionalidade = $nac;
        }

        private function setIdade($id){
            $this->idade = $id;
        }

        private function setAltura($alt){
            $this->altura = $alt;
        }

        private function setPeso($pe){
            $this->peso = $pe;
            if($pe < 52){
                 $this->categoria = "Inválido";
            }elseif($pe < 70.3){
                $this->categoria = "Leve";
            }elseif($pe < 83.9){
                $this->categoria = "Médio";
            }elseif($pe <= 120.2){
                $this->categoria = "Pesado";
            }else{
                $this->categoria = "Inválido";
            }     
        }

        private function setVitorias($vit){
            $this->vitorias = $vit;
        }

        private function setDerrotas($der){
            $this->derrotas = $der;
        }

        private function setEmpates($emp){
            $this->empates = $emp;
        }
    }
?>
