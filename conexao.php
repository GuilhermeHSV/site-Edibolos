<?php 
   

//localhost
/*
$hostname_conn_bd_edibolos = "localhost";
   $database_conn_bd_edibolos = "bd_edibolos";
   $username_conn_bd_edibolos = "root";
   $password_conn_bd_edibolos = "";

   $conn_bd_edibolos = mysqli_connect($hostname_conn_bd_edibolos, $username_conn_bd_edibolos, $password_conn_bd_edibolos, $database_conn_bd_edibolos) or trigger_error(mysqli_connect_errno(), e_user_error);
*/

//Locaweb
$hostname_conn_bd_edibolos = "robb0463.publiccloud.com.br:3306";
   $database_conn_bd_edibolos = "ctsdigital2011_edibd";
   $username_conn_bd_edibolos = "ctsdi_edibdbd";
   $password_conn_bd_edibolos = "Edi2024-!";

   $conn_bd_edibolos = mysqli_connect($hostname_conn_bd_edibolos, $username_conn_bd_edibolos, $password_conn_bd_edibolos, $database_conn_bd_edibolos) or trigger_error(mysqli_connect_errno(), e_user_error);

   mysqli_set_charset($conn_bd_edibolos, 'utf8');

//Página que consulta ao SQL o nome de dominio, banco de dados, usuario e senha para estabelecer conexão.
?>