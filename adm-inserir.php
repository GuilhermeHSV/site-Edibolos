<?php 
include('adm_autenticacao.php');
require('conexao.php');
/*
//Dicas de servidores: Diretivas do php.ini no servidor de hospedagem
//echo phpversion();
//echo phpinfo();
session.auto_start = on
post_max_size = 50M
upload_max_filesize = 50M
memory_limit = 128M 
max_execution_time = 1000
max_input_time = 1000
*/

//Consulta da tabela de Área
$query_rs_area = "SELECT * FROM tb_areas ORDER BY titulo ASC";
$rs_area = mysqli_query($conn_bd_edibolos, $query_rs_area);
$row_rs_area = mysqli_fetch_assoc($rs_area);
$totalRow_rs_area = mysqli_num_rows($rs_area);
//echo($totalRow_rs_area);


//validando a existencia dos dados
//if(){};
if(isset($_POST['titulo']) && isset($_FILES['img']) && isset($_FILES['imgThumb']) && isset($_POST['descricao']) && isset($_POST['preco']) && isset($_POST['recheio']) && isset($_POST['decoracao']) && isset($_POST['cobertura'])  && isset($_POST['massa'])  && isset($_POST['tema'])&& isset($_POST['kgpeso'])&& isset($_POST['ativo']) && isset($_POST['home'])){

// Variaveis utilizaveis 

$titulo = $_POST["titulo"];
$img = $_FILES["img"];
$imgThumb = $_FILES["imgThumb"];
$id_Area = $_POST["id_Area"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$recheio = $_POST["recheio"];
$decoracao = $_POST["decoracao"];
$cobertura = $_POST["cobertura"];
$massa = $_POST["massa"];
$tema = $_POST["tema"];
$kgpeso= $_POST["kgpeso"];
$ativo= $_POST["ativo"];
$home= $_POST["home"];



//Gravando o nome do arquivo de imagem no bd   
$imgNome = $img['name'];  
$imgThumbNome = $imgThumb['name'];
    
//Ele que faz o limite da imagem   
//Upload das imagens
set_time_limit(0);
$diretorio = "imgs/upload";
  
// capturando o arquivo e imagem
$id_img = "img";
$imgNome = $_FILES[$id_img]["name"];
$imgTemp = $_FILES[$id_img]["tmp_name"]; //TMP_NAME é aonde fica o arquivo quando vc copia ele 
move_uploaded_file($imgTemp, "$diretorio/$imgNome");
     
$id_imgThumb = "imgThumb";
$imgThumbNome = $_FILES[$id_imgThumb]["name"];
$imgThumbTemp = $_FILES[$id_imgThumb]["tmp_name"];
move_uploaded_file($imgThumbTemp, "$diretorio/$imgThumbNome");



//Inserir registro

$inserir = "INSERT INTO tb_produts (id_Produts, titulo, img, imgThumb, descricao, preco, id_Area, recheio, decoracao, cobertura, massa, tema, kgpeso, ativo, home, visualizacao) VALUES (NULL, '$titulo', '$imgNome', '$imgThumbNome', '$descricao', '$preco', '$id_Area', '$recheio', '$decoracao', '$cobertura', '$massa', '$tema', '$kgpeso', '$ativo', '$home', 'visualizacao')";

//executar inserir
$resultado = mysqli_query($conn_bd_edibolos, $inserir);

//echo $resultado;
//var_dump($resultado);


// Verificar se deu certo o resultado de inserir e redirecionar para a lista
if($resultado == TRUE){
    echo('<script> alert("Dados inseridos com sucesso!!")
    window.location.href="adm-lista.php";</script');
} else{
         ("Falha ao inserir dados!");
      };
}
?>

<?php
include('_complementos.php');
?>

<!doctype html>
<html>
<head>
   <link rel="stylesheet" href="style.css">
<meta charset="utf-8">
<title>Inserir Registro - Administração do Site</title>
</head>

<body style="margin: 0%; background-color: #FFEDF9">
<header style="background-color: #212529;  height: 205;">

<a href="adm-lista.php"><img class="ml-5 mt-5" src="imgs/logo-178x47.png" alt="Logo da loja EdiBolos"></a>
<p style="font-weight: 500;  
font-family: cursive; font-size: 20px; color:#ffffff;" class="ml-5 mb-4" >Painel Administrativo Inserir

<ul style="background-color:#216741;" class="list-inline">
   
  <li class="list-inline-item">
  <li class="list-inline-item ">

  <li class="list-inline-item">
  <a class="color-links nav-link" href="adm-lista.php">
 <img width="30" height="30" src="imgs\imgsAdm\voltar.png" alt="Logo da loja EdiBolos">VOLTAR PARA A LISTA</a>
 </li>

 <li class="list-inline-item ">

 <li class="list-inline-item ">
 <a class="color-links nav-link" href="adm_logout.php">
 <img width="30" height="30" src="imgs\imgsAdm\logout.png" alt="Logo da loja EdiBolos">LOGOUT</a>
 </li>

</ul>


</header>

 <form method="post" enctype="multipart/form-data" id="form_inserir" 
 style="color: #df318e; font-weight: 600; font-family: cursive; font-size: 19px;">
     
<input name="idCurso" type="hidden" id="idCurso"> <br> <br>

<!-- <input name="dataCad" type="hidden" id="dataCad"> -->
<div class="ml-5" style="margin: 0">
Área: 
<select name="id_Area" required="required" id="id_Area" >
     <option></option>
   <?php do { ?>
    <option  value="<?php echo($row_rs_area['id_Area']); ?>"><?php echo($row_rs_area['titulo']); ?></option>
     <?php } while($row_rs_area = mysqli_fetch_assoc($rs_area)); ?>
</select>
</div> <br><br>

<div class="ml-5">
Título do Bolo: <input name="titulo" type="text" required="required" id="titulo" size="100"><br><br> 
</div>

<div class="ml-5">
Imagem Grande: <input class="btn btn-dark" name="img" type="file" id="img" size="100"><br><br>
</div>

<div class="ml-5">
Imagem Pequena: <input class="btn btn-dark" name="imgThumb" type="file" id="imgThumb" size="100"><br><br>
</div>

<div class="ml-5">
Descrição : <textarea name="descricao" id="descricao" cols="40"></textarea><br><br>
</div>

<div class="ml-5">
Valor : <input name="preco" type="number" id="preco" size="15"> <br> <br>
</div>

<div class="ml-5">
Recheio: <input name="recheio" type="text" id="recheio"> <br> <br>
</div>

<div class="ml-5">
Decoração: <input name="decoracao" type="text" id="decoracao"> <br> <br>
</div>

<div class="ml-5">
Cobertura: <input name="cobertura" type="text" id="cobertura"> <br> <br>
</div>

<div class="ml-5">
Massa: <input name="massa" type="text" id="massa"> <br> <br>
</div>

<div class="ml-5">
Tema: <input name="tema" type="text" id="tema"> <br> <br>
</div>

<div class="ml-5">
Kilos: <input name="kgpeso" type="number" id="kgpeso" size="15"> <br> <br>
</div>

<div class="ml-5">
Ativo : <input name="ativo" type="hidden" value="0">
   <input name="ativo" type="checkbox" value="1" checked="checked"> <br>
</div>

<div class="ml-5 mt-1">
Adicionar na Página Inicial : <input name="home" type="hidden" value="0">
   <input name="home" type="checkbox" value="1" checked="checked"> <br>
</div>

   <input name="visualizacao" type="hidden" id="visualizacao" min="0" value="0"> <br>

<div class="ml-5">
   <input class="btn btn-dark" type="submit">
</div>

</form>   
<br><br>
<!-- Libera a memória associada ao seu resultado da consulta ao bd -->  
<?php 
mysqli_free_result($rs_area);

//Fechar a conexão
mysqli_close($conn_bd_edibolos);
?>
</body>   

   

</html>