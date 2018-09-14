<?php
session_start();
if($session['login'] = null){
    header("Location:../index.php");
}else{
    echo"Bem vindo".$SESSION['login'];
}
?>
<a href= "../controle/sair.php">Sair</a>