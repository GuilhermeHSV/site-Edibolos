<?php
include('adm_autenticacao.php');
require('conexao.php');
include('_complementos.php');
?>
 
<?php
//Criando consulta ao banco de dados para a criação da página de administração (adm-lista.php).
$query_rs_edi = "SELECT * FROM tb_produts ORDER BY tb_produts.id_Produts DESC";
$rs_edi = mysqli_query($conn_bd_edibolos, $query_rs_edi) or die(mysqli_error($conn_bd_edibolos));

//Mostra o total de registros encontrado na consulta (total de linhas).
$totalRow_rs_edi = mysqli_num_rows($rs_edi);

//Busca no banco de dados um resultado na linha
$row_rs_edi = mysqli_fetch_assoc($rs_edi);
?>
 
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<title>Painel Administrativo</title>
<head>

<body>
<header style="background-color: #212529">
<a href="index.php"><img class="ml-5 mt-5" src="imgs/logo-178x47.png" alt="Logo da loja EdiBolos"></a>
<p style="font-weight: 500;  
font-family: cursive; font-size: 20px; color:#ffffff;" class="ml-5 mb-4" >Painel Administrativa Lista
</p>

<ul style="background-color:#216741" class="list-inline ">
  
  <li class="list-inline-item">
  <li class="list-inline-item ">

  <li class="list-inline-item ">
  <a class="color-links nav-link" href="index.php">
 <img class="mr-2" width="30" height="30" src="imgs\imgsAdm\voltar.png" alt="Logo da loja EdiBolos">VOLTAR PARA A HOME</a>
 </li>

 
 <?php if(isset($_SESSION['email']) && strpos($_SESSION['email'], 'admin!@gmail.com') !== FALSE):?>
<li class="list-inline-item ">
  <a class="color-links nav-link" href="adm_usuario.php">
 <img class="mr-2" width="30" height="30" src="imgs\imgsAdm\icon_user.png" alt="Logo da loja EdiBolos">CRIAR USUÁRIOS</a>
 </li> <?php endif;?>

 <li class="list-inline-item ">

<li class="list-inline-item ">
<a class="color-links nav-link" href="adm_logout.php">
<img class="mr-2" width="30" height="30" src="imgs\imgsAdm\logout.png" alt="Logo da loja EdiBolos">LOGOUT</a>
</li>

</ul>
</header>

<?php do { ?> 

<table style="background-color: #FFEDF9" width="98%">
<tbody style="background-color: #FFEDF9">

 <tr style="color:#DF318E; font-family: cursive; font-weight: 800; " class="text-center"> <!--Inicio da primeira linha (títulos)-->
   <td width="5%">Inserir</td>
   <td width="5%">Editar</td>
   <td width="5%">Excluir</td>
   <td width="12%">Id Produtos</td>
   <td width="18%">Título</td>
   <td width="5%">Ativo</td>
   <td width="5%">Início</td>
   <td width="5%">Área</td>
   <td width="18%">Imagem</td>
   <td width="12%"></td>
 </tr> <!--Fim da primeira primeira linha-->

<hr style="border: none; height: 1px; background-color: #FFEDF9">
 <tr style="font-weight: 600; font-family: 'Yantramanav'; font-size: 20px;" class="text-center">
   <td><a href="adm-inserir.php"><img src="imgs/imgsAdm/inserir.png" width="30" height="30" alt="Botão de inserir"/></a></td>
   
   
   <td><a href="adm-editar.php?id_Produts=<?php echo($row_rs_edi['id_Produts']);?>">
   <img src="imgs/imgsAdm/editar.png" width="30" height="30" alt="Botão editar"/></td>

   <td> <!--Botão excluir do painel-->
    <a href="adm-excluir.php?id_Produts=<?php echo($row_rs_edi['id_Produts']);?>" onClick="return confirm('Deseja realmente excluir?')" >
    <img src="imgs/imgsAdm/excluir.png" width="30" height="30" alt=""/>
    </a>
   </td>

   <td><?php echo($row_rs_edi['id_Produts']); ?></td>
   <td><?php echo($row_rs_edi['titulo']); ?></td>
   <td><?php echo($row_rs_edi['ativo']); ?></td>
   <td><?php echo($row_rs_edi['home']); ?></td>
   <td><?php echo($row_rs_edi['id_Area']); ?></td>
   <td><img width="130" height="130" src="imgs/upload/<?php echo($row_rs_edi["imgThumb"]); ?>" 
   <?php echo($row_rs_edi['imgThumb']); ?>/></td>
   
 </tr>


</tbody>
</table>
<?php } while ($row_rs_edi = mysqli_fetch_assoc($rs_edi)); ?>

 <hr style="border: none; height: 1px; background-color: #21252996; margin: 20px 0;"> 
</body>
</html>