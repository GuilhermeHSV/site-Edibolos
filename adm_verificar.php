<?php
session_start();
require('conexao.php');

// Verificar se os campos de email e senha foram enviados no formulário
if(isset($_POST['email']) && isset($_POST['senha'])){
    // Escapar os valores para evitar SQL Injection
    $usuario = mysqli_real_escape_string($conn_bd_edibolos, $_POST['email']);
    $senha = mysqli_real_escape_string($conn_bd_edibolos, $_POST['senha']);
} else {
    // Se algum dos campos estiver faltando, redirecionar de volta para a página de login
    header('Location: adm_login.php');
    exit(); // Terminar o script
}

// Verificar se o campo de email ou senha está vazio
if(empty($usuario) || empty($senha)){
    // Se algum dos campos estiver vazio, redirecionar de volta para a página de login
    header('Location: adm_login.php');
    exit(); // Terminar o script
}

// Consultar o banco de dados para encontrar o usuário com o email fornecido
$query = "SELECT * FROM tb_login WHERE email = '$usuario'";
$resultado = mysqli_query($conn_bd_edibolos, $query);

// Verificar se a consulta foi bem-sucedida e se encontrou um usuário
if($resultado && $row = mysqli_fetch_assoc($resultado)){
    // Comparar a senha inserida com o hash MD5 armazenado no banco de dados
    if(md5($senha) === $row['senha']){
        // Se a senha estiver correta, iniciar a sessão e redirecionar para a página de lista
        $_SESSION['email'] = $usuario;
        header('Location: adm-lista.php');
        exit(); // Terminar o script
    } else {
        // Se a senha estiver incorreta, redirecionar de volta para a página de login com uma mensagem de erro
        header('Location: adm_erro.php');
        exit(); // Terminar o script
    }
} 
?>
<?php 
mysqli_free_result($rs_area);

//Fechar a conexão
mysqli_close($conn_bd_edibolos);
?>