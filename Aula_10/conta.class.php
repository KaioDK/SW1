<?php
    class Conta{
        public $Nome;
        public $Cpf;
        public $Saldo;

        public function Sacar ($Valor){
            if($this->Saldo<$Valor){
                return "Saldo insuficiente, saque não realizado. <br> <hr>";
            }
            else{
                $this->Saldo = $this->Saldo - $Valor;
                $texto = "Saque realizado. Seu saldo atual é de R$: " . $this->Saldo . "<br> <hr>";
                return $texto;
            }

        }

        public function Depositar($Valor){
            $this->Saldo += $Valor;
            $texto_deposito =  "Deposito realizado. Seu saldo atual é de R$: " . $this->Saldo . "<br> <hr>";
            return $texto_deposito;
        }

        public function ExibirSaldo(){
            echo "Nome do cliente: " . $this->Nome . "<br>";
            echo "CPF do cliente: " . $this->Cpf . "<br>";
            echo "Saldo disponivel: R$" . $this->Saldo . "<br>";
        }
    }

?>