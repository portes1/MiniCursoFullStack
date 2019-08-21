<?php
session_start();
if(!isset($_SESSION["usuario"])){
  header("location:index.html");
}

 ?>

 <!DOCTYPE html>
 <html >
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <a href="sair.php">SAIR</a>

        </body>
 </html>
