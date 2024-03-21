<?php
include('adm_autenticacao.php');
require('conexao.php');


// Capturar post do form e validar com isset
if(isset($_POST['submit'])){
    $id_Produts = $_POST['id_Produts'];
    $titulo = $_POST["titulo"];
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
   
    // Upload das imagens
    $diretorio = "imgs/upload/";
   
    //img
    set_time_limit(0);
    $id_img = "img"; // Var para o nome do campo
    $imgNome =  $_FILES[$id_img]["name"] ;
       
    $id_imgThumb = "imgThumb";
    $imgThumbNome = $_FILES[$id_imgThumb]["name"];
       
    // Corrigir erro ao gravar vazio
    if($imgNome != ''){
        unlink($diretorio.$_REQUEST['imgG']);
        $imgTemp = $_FILES[$id_img]["tmp_name"];
        move_uploaded_file($imgTemp,$diretorio.$imgNome);
    } else{
        $imgNome = $_REQUEST['imgG'];
    }
   
    if($imgThumbNome != ''){
        unlink($diretorio.$_REQUEST['imgThumbM']);
        $imgThumbTemp = $_FILES[$id_imgThumb]["tmp_name"];
        move_uploaded_file($imgThumbTemp,$diretorio.$imgThumbNome);
    } else{
        $imgThumbNome = $_REQUEST['imgThumbM'];
    }
   
    // Editar dados do registro
    $editar = "UPDATE tb_produts SET id_Produts = '$id_Produts', titulo = '$titulo',
    img = '$imgNome', imgThumb = '$imgThumbNome', id_Area = '$id_Area', descricao = '$descricao',
    preco = '$preco', recheio = '$recheio', decoracao = '$decoracao', cobertura = '$cobertura',
    massa = '$massa', tema = '$tema', kgpeso = '$kgpeso', ativo = '$ativo', home = '$home' WHERE id_Produts = '$id_Produts'";
   
    $resultado = mysqli_query($conn_bd_edibolos, $editar) or die(mysqli_error($conn_bd_edibolos));
   
    if(!$resultado){
        die("ERROR".mysqli_error($conn_bd_edibolos));
    } else{
        header("Location: adm-lista.php");
    }
}
 
// Consulta para passagem de parametro
if(isset($_GET['id_Produts'])){
    $id = $_GET['id_Produts'];
};
 
$query_rs_produts = "SELECT * FROM tb_produts WHERE tb_produts.id_Produts = '$id'";
 
$rs_produts = mysqli_query($conn_bd_edibolos, $query_rs_produts) or die(mysqli_error($conn_bd_edibolos));
 
$row_rs_produts = mysqli_fetch_assoc($rs_produts);
 
$totalRow_rs_produts = mysqli_num_rows($rs_produts);
 
// Consulta a tabela de area
$query_rs_area = "SELECT * FROM tb_areas";
$rs_area = mysqli_query($conn_bd_edibolos, $query_rs_area);
$row_rs_area = mysqli_fetch_assoc($rs_area);
?>
 <?php
include('_complementos.php');
?>

<!doctype html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<meta charset="utf-8">
<title>Editar Registro - Administração do Site</title>
</head>
<body style="margin: 0%; background-color: #FFEDF9">
<header style="background-color: #212529">
<a href="adm-lista.php"><img class="ml-5 mt-5" src="imgs/logo-178x47.png" alt="Logo da loja EdiBolos"></a>
<p style="font-weight: 500;  
font-family: cursive; font-size: 20px; color:#ffffff;" class="ml-5 mb-4" >Painel Administrativo Editar
<ul style=" background-color: #216741" class="list-inline">
   
   <li class="list-inline-item">
   <li class="list-inline-item ">
 
   <li class="list-inline-item ">
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
 </header>

 <div class="ml-5" style="margin: 0">
 
<form action="<?=$_SERVER["PHP_SELF"]?>" method="post" enctype="multipart/form-data" id="form_editar"
style="color: #df318e; font-weight: 600; font-family: cursive; font-size: 19px;">
<input name="id_Produts" type="hidden" id="id_Produts" value="<?php echo($row_rs_produts['id_Produts']); ?>">
<br><br>

Área:
<select name="id_Area" id="id_Area">
<?php do{ ?>
<option value="<?php  echo($row_rs_area['id_Area'])  ?>" <?php if($row_rs_produts['id_Area'] === $row_rs_area['id_Area']){echo "selected=\"selected\"";}; ?>><?php  echo($row_rs_area['titulo'])  ?></option>
<?php } while($row_rs_area = mysqli_fetch_assoc($rs_area)); ?>
</select>  
<br><br><br>

Título do Bolo: <input name="titulo" type="text" required="required" id="titulo" size="40" value="<?php echo($row_rs_produts['titulo']); ?>"><br><br>
 <br>

Imagem Grande: <?php echo($row_rs_produts['img'])?>
<img class="ml-4" src="imgs/upload/<?php echo($row_rs_produts['img']); ?>" width="100">
 
    <input name="imgG" type="hidden" id="imgG" value="<?php echo($row_rs_produts['img']);?>"><br>
    <input name="img" type="file" id="img"><br><br>
<br>

Imagem Pequena: <?php echo($row_rs_produts['imgThumb'])?> 
<img class="ml-4" src="imgs/upload/<?php echo($row_rs_produts['imgThumb']);?>" width="100">
<input name="imgThumbM" type="hidden" id="imgThumbM" value="<?php echo($row_rs_produts['imgThumb']);?>"><br>
 
<input name="imgThumb" type="file" id="imgThumb"><br><br><br>
 <br>

Descrição:<br>
<textarea name="descricao" cols="40" id="descricao"> <?php echo($row_rs_produts['descricao']); ?> </textarea><br><br>

Valor: <input name="preco" type="number" id="preco" size="15" value="<?php echo($row_rs_produts['preco'])?>"> <br> <br>

 
Recheio: <input name="recheio" type="text" id="recheio" size="15" value="<?php echo($row_rs_produts['recheio']); ?>"><br><br>
 
Decoração: <input name="decoracao" type="text" id="decoracao" size="15" value="<?php echo($row_rs_produts['decoracao']); ?>"><br><br>
 

Cobertura: <input name="cobertura" type="text" id="cobertura" value="<?php echo($row_rs_produts['cobertura']); ?>"> <br> <br>

 

Massa: <input name="massa" type="text" id="massa" value="<?php echo($row_rs_produts['massa']); ?>"> <br> <br>

 

Tema: <input name="tema" type="text" id="tema" value="<?php echo($row_rs_produts['tema']); ?>"> <br> <br>

 

Kilos: <input name="kgpeso" type="number" id="kgpeso" size="15" value="<?php echo($row_rs_produts['kgpeso']); ?>"> <br> <br>

 
Home:
<input name="home" type="hidden" id="home" value="0">
<input name="home" type="checkbox" id="home" value="1" <?php if($row_rs_produts['home'] == 1 ){echo "checked=\"checked\""; }; ?>><br><br>
 
Adicionar na Página Inicial:
<input name="ativo" type="hidden" id="ativo" value = "0">
<input name="ativo" type="checkbox" id="ativo" value = "1" <?php if($row_rs_produts['ativo'] == 1 ){echo "checked=\"checked\""; };?>><br><br>

<input name = "submit" id = "submit" class="btn btn-dark" type="submit">
</form>
</div>
</body>  
</html>
