<?php
 $usuario =$_POST["usuario"]; //essa variavel vai rceber as informaçoes
 $senha =$_POST["senha"] ;

 if ($usuario == "gi@gmail" && $senha ==123){
    header("location:painel.php");
    // header redirecionamento pra esse local
 }
 else{
    header("location:usuario-invalido.php");
 }
?>
