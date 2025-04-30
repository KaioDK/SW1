<?php
    include_once 'Pessoa.class.php';

    $fulano = new Pessoa();
    $ciclano = new Pessoa();
   
    //var_dump($fulano);

    $fulano->Nome = "FULANO DA SILVA";
    $fulano->Peso = 70;
    $fulano->Altura = 1.82;

    $ciclano->Nome = "CICLANO DA SILVA";
    $ciclano->Peso = 63;
    $ciclano->Altura = 1.77;

    $fulano->MostrarDados();
    $ciclano->MostrarDados();
?>