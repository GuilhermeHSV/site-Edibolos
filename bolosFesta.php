<?php require("conexao.php"); ?>

<?php 
// Criando a consulta com o banco de dados
// O conteudo da pagina devera vir da consulta ao banco de dados
//Consulta para puxar apenas produtos da area 2.
$query_rs_edi = "SELECT * FROM tb_produts WHERE tb_produts.ativo = 1 AND tb_produts.id_Area = 2  ORDER BY tb_produts.id_Produts DESC";

// Executar a consulta
$rs_edi = mysqli_query($conn_bd_edibolos, $query_rs_edi) or die(mysqli_error($conn_bd_edibolos));


//Total de registro encontrado na consulta banco de dados
$totalRow_rs_edi = mysqli_num_rows($rs_edi);
//echo($totalRow_rs_curso);

// Obter UMA linha do resultado como a array
$row_rs_edi = mysqli_fetch_assoc($rs_edi);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<!--INÍCIO DO HEAD-->   
<head>
    <meta charset="UTF-8"><!-- Codificação dos caracteres da página -->
    <meta name="description" content="A Edi Bolos é a loja mais famosa do bairro, com os seus incríveis e deliciosos doces e bolos."><!-- Descrição da página -->
    <meta name="keywords" content="bolos,bolo,loja,doces,chocolate,chocolates,caseiros,confeitaria,sobremesas,cupcakes,encomendas,aniversario,festas,pote,brownie,festa"><!-- Palavras-chave para busca via motor de pesquisa -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Viewport para dispositivos móveis -->
    <meta name="language" content="pt-BR"><!-- Idioma para motor de pesquisa-->
    <link rel="stylesheet" href="galeria/engine1/style.css"><!-- Estilos do carrossel -->
    <script src="galeria/engine1/jquery.js"></script><!-- jQuery para o carrossel -->
    <link href="bootstrap441/css/bootstrap.min.css" rel="stylesheet" type="text/css"><!-- Estilos do Bootstrap -->
    <link href="bootstrap441/js/bootstrap.min.js" rel="stylesheet" type="text/js"><!-- Scripts do Bootstrap -->
    <link rel="stylesheet" href="style.css" media="all"> <!-- Estilos personalizados -->
    <link rel="shortcut icon" href="imgs/favicon_84x87.png" type="image/x-icon"><!-- Ícone da página -->
    <link href="lightbox2/dist/css/lightbox.min.css" rel="stylesheet" type="text/css"><!-- Estilos do Lightbox para visualização de imagens -->
    <title>Edi Bolos - Bolo de Festa</title><!-- Título da página -->

    <!--API do Botão do Whatsapp por:JivoChat -->
    <script>(function () {var options = {whatsapp: "+5511984455345",company_logo_url: "", greeting_message: "Olá!", call_to_action: "Entre em contato conosco!", position: "right", };var proto = document.location.protocol, host = "jivo.link", url = proto + "//" + host;var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/ferramentas-de-marketing/jivowpp.js';s.onload = function () { WhWidgetSendButton.init(host, proto, options); };var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);})();</script>
</head>

<!--FIM DO HEAD-->     
<body>
	<h2 class="fonte-zero">Lançamentos</h2>
  
   
<!--INÍCIO DO HEADER-->     
<header> 

<!--Topo--> 
<?php include("_topo.php");?>


<!--Navbar--> 
<?php include("_navbar.php");?>

</header>
<!--FIM HEADER--> 


<!--INÍCIO DO MAIN--> 
<main style="background-color: #ffe6d1"> <!--start main-->
<!--Carrosel-->

  <h2 class="fonte-zero">Galeria de Imagens</h2>

<div id="wowslider-container1"> 
   <div class="ws_images"> <!--start div img do carrossel-->
    <ul>
     <li><img src="galeria/data1/images/carrossel_01.png" alt="Imagem do Carrossel um" title="Imagem do Carrossel um" id="c1"></li>
     <li><img src="galeria/data1/images/carrossel_02.png" alt="Imagem do Carrossel dois" title="Imagem do Carrossel dois" id="c2"></li>
     <li><img src="galeria/data1/images/carrossel_03.png" alt="Imagem do Carrossel três" title="Imagem do Carrossel três" id="c3"></li>
     <li><img src="galeria/data1/images/carrossel_04.png" alt="Imagem do Carrossel quatro" title="Imagem do Carrossel quatro" id="c4"></li>
    </ul>
 </div> <!--Fim div img do carrossel-->

<div class="ws_bullets"> 
  <div> <!--start div prévia img do carrossel-->
   <a href="#" title=""><span><img src="galeria/data1/tooltips/carrossel_01.png" alt="Imagem do Carrossel um" title="Imagem do Carrossel um" width="230" height="80" ></span>1</a>
   <a href="#" title=""><span><img src="galeria/data1/tooltips/carrossel_02.png" alt="Imagem do Carrossel dois" title="Imagem do Carrossel dois" width="230" height="80" ></span>2</a>
   <a href="#" title=""><span><img src="galeria/data1/tooltips/carrossel_03.png" alt="Imagem do Carrossel três" title="Imagem do Carrossel três" width="230" height="80" ></span>3</a>
   <a href="#" title=""><span><img src="galeria/data1/tooltips/carrossel_04.png" alt="Imagem do Carrossel quatro" title="Imagem do Carrossel quatro" width="230" height="80" ></span>3</a>
  </div> <!--start div prévia img do carrossel-->
</div>

<div class="ws_script" style="position:absolute;left:-99%">
  <a href="#"></a>
</div>

<div class="ws_shadow"></div>
</div>

<!--Carrosel-->

	
<!-- Links das páginas de bolos e doces -->
<?php include("_linksBolos.php");?>


<div class="alert alert-dark text-center texto-logo shadow-lg p-3 mb-5 rounded" style="background-color: #51B07C;">
Bolos de Festa
</div>


<!--Container de Formatação e Responsividade Seção Bolos-->
<?php include("_cards.php");?>
<!--OBS: o Rodape está dentro do main--> 

<!--Rodape Inicio-->    
<?php include("_rodape.php");?>
<!--Rodape Fim-->


</main>

<!--FIM DO MAIN-->     

<!--links JS-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
<script src="js/animation_home.js" ></script>
<script src="lightbox2/dist/js/lightbox-plus-jquery.min.js"></script>
    

     
<?php 
	  //libera a memoria associada ao resultado da ao BD
	mysqli_free_result($rs_edi);
		
		//fecha conexao
	mysqli_close($conn_bd_edibolos);
    ?> 


</body>
</html>



