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
            echo "<p>-----------------------------------------------------------------</p>";
            echo "<p>CHEGOU A HORA! O lutador </p>{$this->getNome()} ";
            echo "veio diretamente de {$this->getNacionalidade()}, tem ";
            echo "{$this->idade} anos e pesa ";
            echo "{$this->getPeso()} Kg<br>";
            echo "Com {$this->getAltura()} m de altura ele tem ";
           
            echo "{$this->getVitorias()} vitórias, ";
            echo "{$this->getDerrotas()} derrotas e ";
            echo "{$this->getEmpates()} empates<br>";
        }

        public function status(){ // Barra que mostra no rodapé do vídeo
            echo "<p>-----------------------------------------------------------------</p>";
            echo "{$this->getNome()} é um peso {$this->getCategoria()} e já ganhou {$this->getVitorias()} vezes , {$this->getDerrotas()} derrotas e teve {$this->getEmpates()} empates<br>";
        }
        
        public function ganharLuta(){
            $this->setVitorias($this->getVitorias() + 1);
        }

        public function perderLuta(){
            $this->setDerrotas($this->getDerrotas() + 1);
        }

        public function empatarLuta(){
            $this->setEmpates($this->getEmpates() + 1);
        }

        // Métodos especiais: acessores e modificadores ---------

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
            $this->setPeso($peso); // Atualzando o atributo "categoria" ao chamar "setPeso()":
            $this->vitorias = $vit;
            $this->derrotas = $der;
            $this->empates = $emp;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getNacionalidade(){
            return $this->nacionalidade;
        }

        public function getIdade(){
            return $this->idade;
        }

        public function getAltura(){
            return $this->altura;
        }

        public function getPeso(){
            return $this->peso;
        }

        public function getCategoria(){
            return $this->categoria;
        }

        public function getVitorias(){
            return $this->vitorias;
        }

        public function getDerrotas(){
            return $this->derrotas;
        }

        public function getEmpates(){
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
            $this->setCategoria();
        }

        function setCategoria(){
            if($this->peso < 52){
                $this->categoria = "Inválido";
           }elseif($this->peso < 70.3){
               $this->categoria = "Leve";
           }elseif($this->peso < 83.9){
               $this->categoria = "Médio";
           }elseif($this->peso <= 120.2){
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
