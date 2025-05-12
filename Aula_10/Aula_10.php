<?php
    include_once 'conta.class.php';

    $conta1 = new Conta();
    
    $conta1->Nome = "Batman";
    $conta1->Cpf = "777.999.666-00";
    $conta1->Saldo = 0;
    
    $conta1->ExibirSaldo();

    echo"<br>";

    echo $conta1->Depositar(500);

    $conta1->ExibirSaldo();

    echo "<hr>";

    echo $conta1->Sacar(600);

    $conta1->ExibirSaldo();

    echo "<br>";

    echo $conta1->Sacar(250);

    $conta1->ExibirSaldo(); 
?>