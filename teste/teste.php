<?php
    session_start();
    if(isset($_SESSION["usuario"])){
        header("location: perfil.php");
    }else{
        header("location: index.html");
    }
?>
