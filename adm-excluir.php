<?php 
require('conexao.php');

if(isset($_GET['id_Produts'])){
    $id_Produts = $_GET['id_Produts'];
    };

    $query_rs_img = "SELECT * FROM tb_produts WHERE id_Produts = $id_Produts";
    $rs_img = mysqli_query($conn_bd_edibolos, $query_rs_img);
    $row_rs_img = mysqli_fetch_assoc($rs_img);
    unlink("imgs/upload/".$row_rs_img['img']);
    unlink("imgs/upload/".$row_rs_img['imgThumb']);

 //Consulta para excluir a linha baseando-se na variável 'id_Produts'.
$excluir = "DELETE FROM tb_produts WHERE id_Produts = $id_Produts";

//execução de consulta no banco de dados / Validação de erro.
$rs_excluir = mysqli_query($conn_bd_edibolos, $excluir) or die(mysqli_error($conn_bd_edibolos));

$resultado = mysqli_query($conn_bd_edibolos, $excluir);

if($resultado == 1){
    echo('<script> alert("Dados Deletados Com Sucesso!")
    window.location.href="adm-lista.php";</script');
} else{
         ("Falha ao excluir dados!");
      };
?>


<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>Página Excluir</title>
</head>

<body style="background-color: #212529;">
  <h1>Página Excluir</h1>

  <?php 
	  // Libera a memória associada ao resultado do Banco de dados
	//mysqli_free_result($rs_edi);
		
	// Fecha a conexão ao banco de dados
	//mysqli_close($conn_bd_edibolos);
    ?> 
    
</body>
</html>