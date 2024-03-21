<?php  
session_start();

//Se a sessao do usuario nao existir 
if(!$_SESSION['email']){
    header('location: index.php');
    exit();
};

?>