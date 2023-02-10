<?php
    class venda{

        // Atributos: ---------------------
        var $cartCredito;
        var $dinheiro;
        var $ljFisica;
        var $ljVirtual;

        // Métodos: -----------------------
        
        function cancelar() {
            $this->cancelada = true;
            if($this->realizada == true){
                $this->estornada = true;
            } else {
                $this->estornada = false;
            }
            $this->informativo();
        }

        function parcelar() {
            $this->pendente = true;
        }

        function realizar() {
            $this->realizada = true;
            $this->informativo();
        }

        function informativo() {

            // Cliente realizou a compra
            if($this->realizada && $this->cancelada == false){
                echo "<p>Parabéns, sua compra foi realizada com sucesso, favor verificar seu e-mail, lá você poderá acompanhar o rastreamento da sua mercadoria.</p>";
            }

            // Cliente solicitou cancelamento da transação:
            if($this->cancelada && $this->estornada){
                if($this->cartCredito){
                    echo "<p> Caro cliente, seu pedido de CANCELAMENTO foi aceito, favor verificar na sua próxima fatura, o ESTORNO do seu pagamento</p>";
                } elseif($this->dinheiro){
                    echo "<p> Caro cliente, seu pedido de CANCELAMENTO foi aceito, favor nos contatar para devolvermos o valor pago, se possível, envie seus dados bancários</p>";
                }
            } elseif($this->cancelada && $this->estornada == false){
                echo "Seu pedido de cancelamento não foi aceito pois não consta o pagamento no nosso sistema, favor nos contatar pelo canal FALE CONOSCO para esclarecimento";
            }




        }

        // Estado (status): ---------------
        var $pendente;
        var $estornada;
        var $realizada;
        var $cancelada;

    }
?>