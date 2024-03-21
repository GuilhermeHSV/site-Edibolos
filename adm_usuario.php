<?php 
include('adm_autenticacao.php');
include('conexao.php');

//validando a existencia dos dados
if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])) {

//recebendo os dados inseridos nos campos do formulário.
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);

//inserindo ás informações coletadas no banco de dados.
$inserir = "INSERT INTO tb_login (nome,email,senha) VALUES ('$nome','$email','$senha')";
$resultado = mysqli_query($conn_bd_edibolos,$inserir);


if($resultado) {
    echo '<script> alert ("Usuário cadastrado com sucesso!!!"); window.location.href="adm_login.php"; </script>';    exit(); // Encerra a execução do script para garantir que o redirecionamento seja realizado
} else {
    echo '<script>alert("Erro ao cadastrar usuário.");</script>';
}
    };
?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Criação de Usuários</title>
</head>
<body>
    
<form method="post">
    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome" required><br><br>
    
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="senha">Senha:</label><br>
    <input type="password" id="senha" name="senha" required><br><br>
    <input type="submit" value="Cadastrar">
</form>


</body>
</html>
<?php
// Fechando a conexão com o banco de dados
mysqli_close($conn_bd_edibolos);
?>