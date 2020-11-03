<?php 

session_start();

 

$_SESSION['autenticado']  = 'sssi';


echo "Autenticado " .$_SESSION['autenticado']  ;
?>