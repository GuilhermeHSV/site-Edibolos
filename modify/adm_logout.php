<?php 
session_start();
session_destroy(); //detruir todas as sessões logadas
header('Location: adm_login.php');
exit();
?>