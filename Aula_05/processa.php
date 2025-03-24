<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($email == 'aluno@gmail.com' && $senha == '1234'){
        //segue para a pagina privada.php
        $nome = "Aluno";
        header('Location: privada.php?nome='.$nome);
    }
    else{
        //segue [arra a pagina erro.php]
        header('Location: erro.php');
    }
?>