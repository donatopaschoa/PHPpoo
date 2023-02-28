<?php
    require_once "Aluno.php";
    class Bolsista extends Aluno{

        private $bolsa;     // >> Valor em % do valor integral

        public function renovarBolsa(){
            echo "<p>Bolsa renovada</p>";
        }

       public function pagarMensalidade(){ // Sobreposição do mét mãe "pagarMensalidade()"
            echo "<p>A mensalidade do Bolsista {$this->getNome()} será paga c/ desconto</P>";
       }

       public function getBolsa(){
        return $this->bolsa;
       }

       public function setBolsa($bolsa){
        $this->bolsa = $bolsa;
       }
    }
?>