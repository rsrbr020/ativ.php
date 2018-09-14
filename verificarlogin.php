<?php
$loginSis = "admin";
$senhaSis = "admin";
if($login == $loginSis && $senha == $senhaSis){
    $session_start();
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    header('Location:../aluno/index.php');
}else{
    echo "<script type='text/javascript>' alert('dados incorretos'); </script>";
header('Location:../index.php');
}
?>