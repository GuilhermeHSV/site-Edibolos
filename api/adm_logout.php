<?php 
session_start();
session_destroy(); //detruir todas as sessões logadas
header('Location: adm_login.php');
// Fechando a conexão com o banco de dados
mysqli_close($conn_bd_edibolos);
exit();

?>

