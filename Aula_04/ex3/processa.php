<?php
  
    $login = $_POST['cxlogin'];
    $senha = $_POST['cxsenha'];
   
    if ($login == "etec" and $senha == "informatica"){
        echo "logado com sucesso.";
    }
    

?>