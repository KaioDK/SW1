<?php 
    class Pessoa{
        public $Nome;
        public $Peso;
        public $Altura;

        public function MostrarDados(){
            echo "Olá, o meu nome é: ".$this->Nome. ", o meu peso é de: " .$this->Peso. "kg e minha altura é: " .$this->Altura;
            echo "<br>";
           
        }
    }
?>