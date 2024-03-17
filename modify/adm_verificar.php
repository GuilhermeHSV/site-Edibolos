<?php
session_start();
require('conexao.php');

//Buscar dados inserir no input
if(isset($_POST['email'])){
   $email = $_POST['email'];
};

if(isset($_POST['senha'])){
    $senha = $_POST['senha'];
 };

//verificação se o campo email ou senha for vazio.
if(empty($_POST["email"]) || empty($_POST["senha"])){
   header('Location: adm_login.php');
     exit(); //sair da página (logout do nada).
};

//consultando dados do usuário no BD
$query = "SELECT * FROM tb_login WHERE email = '$email' AND senha = '$senha'";
$resultado = mysqli_query($conn_bd_edibolos,$query);
$row = mysqli_num_rows($resultado);
echo ($row);

// verificar se o email e a senha é verdadeiro, se == 1 ir para adm-lista.php, se == 0 ir para erro.php
if($row == 1){
    $_SESSION['email'] = $email; //Iniciar a sessão no ínicio do documento
    header('Location: adm-lista.php');
    exit();
} else{ 
    header('Location: adm_erro.php');
    exit();
};
?>