<?php require("conexao.php"); // Requerimento de conexão ao banco de dados ?>

<?php 
// Consulta ao banco de dados para obter os produtos ativos e marcados como home
$query_rs_edi = "SELECT * FROM tb_produts WHERE tb_produts.ativo = 1 AND tb_produts.home = 1 ORDER BY tb_produts.id_Produts DESC";

// Executa a consulta ao Banco de Dados
$rs_edi = mysqli_query($conn_bd_edibolos, $query_rs_edi) or die(mysqli_error($conn_bd_edibolos));

// Obtém uma linha do resultado como uma array associativa
$row_rs_edi = mysqli_fetch_assoc($rs_edi);

//Obter UMA linha do resutlado como array
$totalRow_rs_edi = mysqli_num_rows($rs_edi);


/*Código visualizar
$query_rs_edi_visu = "SELECT * FROM tb_produts WHERE tb_produts.ativo = 1 ORDER BY tb_produts.visualizacao DESC LIMIT 4";
$rs_edi_visu = mysqli_query($conn_bd_edibolos, $query_rs_edi_visu) or die(mysqli_error($conn_bd_edibolos));
$totalRow_rs_edi_visu = mysqli_num_rows($rs_edi_visu);
$row_rs_edi_visu = mysqli_fetch_assoc($rs_edi_visu);*/
?>

<!DOCTYPE html>
<html lang="pt-BR"><!-- Definição do idioma utilizado na Página -->
<!-- INÍCIO DO HEAD -->
<head>
    <meta charset="UTF-8"><!-- Codificação dos caracteres da página -->
    <meta name="description" content="A Edi Bolos é a loja mais famosa do bairro, com os seus incríveis e deliciosos doces e bolos."><!-- Descrição da página -->
    <meta name="keywords" content="bolos,bolo,loja,doces,chocolate,chocolates,caseiros,confeitaria,sobremesas,cupcakes,encomendas,aniversario,festas,pote,brownie"><!-- Palavras-chave para busca via motor de pesquisa -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Viewport para dispositivos móveis -->
    <meta name="language" content="pt-BR"><!-- Idioma para motor de pesquisa-->
    <link rel="stylesheet" href="galeria/engine1/style.css"><!-- Estilos do carrossel -->
    <script src="galeria/engine1/jquery.js"></script><!-- jQuery para o carrossel -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
    <link href="bootstrap441/css/bootstrap.min.css" rel="stylesheet" type="text/css"><!-- Estilos do Bootstrap -->
    <link href="bootstrap441/js/bootstrap.min.js" rel="stylesheet" type="text/js"><!-- Scripts do Bootstrap -->
    <link rel="stylesheet" href="style.css" media="all"> <!-- Estilos personalizados -->
    <link rel="shortcut icon" href="imgs/favicon_84x87.png" type="image/x-icon"><!-- Ícone da página -->
    <script src="js/animation_home.js" ></script>
      <link rel="manifest" href="pwa/manifest.json">
    <title>Edi Bolos - Pagina inicial</title><!--Título da página-->
    <!--API do Botão do Whatsapp por:JivoChat-->
    <script>(function () {var options = {whatsapp: "+5511984455345",company_logo_url: "", greeting_message: "Olá!", call_to_action: "Entre em contato conosco!", position: "right", };var proto = document.location.protocol, host = "jivo.link", url = proto + "//" + host;var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/ferramentas-de-marketing/jivowpp.js';s.onload = function () { WhWidgetSendButton.init(host, proto, options); };var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);})();</script>
</head>
<!-- FIM DO HEAD -->


<body>
  
    
<!-- INÍCIO DO HEADER -->
<header> 
	<h1 class="fonte-zero">Edi Bolos - Experimente e apaixone-se</h1>
<!-- Inclusão do topo padronizado --> 
<?php include("_topo.php");?>

<!-- Inclusão da Navbar Padronizado --> 
<?php include("_navbar.php");?>

</header>
<!-- FIM DO HEADER -->

<!-- INÍCIO DO MAIN -->
<main style="background-color: #FFE6D1">

<div id="wowslider-container1"> 
	<section>
		<h2 class="fonte-zero">Galeria de Imagens</h2>
   <div class="ws_images"> <!-- Início do carrossel de imagens -->
	   
    <ul>
     <li><img src="galeria/data1/images/carrossel_01.png" alt="Imagem do Carrosel um" title="Imagem do Carrosel um" id="c1"></li>
     <li><img src="galeria/data1/images/carrossel_02.png" alt="Imagem do Carrosel dois" title="Imagem do Carrosel dois" id="c2"></li>
     <li><img src="galeria/data1/images/carrossel_03.png" alt="Imagem do Carrosel três" title="Imagem do Carrosel três" id="c3"></li>
     <li><img src="galeria/data1/images/carrossel_04.png" alt="Imagem do Carrosel quatro" title="Imagem do Carrosel quatro" id="c4"></li>
    </ul>
 </div> <!-- Fim do carrossel de imagens -->

<div class="ws_bullets"> 
  <div> <!-- Pré-visualização do carrossel -->
	  
   <a href="#"><span><img src="galeria/data1/tooltips/carrossel_01.png" width="230" height="80" alt="Imagem do Carrosel um" title="Imagem do Carrosel um"></span>1</a>
   <a href="#"><span><img src="galeria/data1/tooltips/carrossel_02.png" width="230" height="80" alt="Imagem do Carrosel dois" title="Imagem do Carrosel dois"></span>2</a>
   <a href="#"><span><img src="galeria/data1/tooltips/carrossel_03.png" width="230" height="80" alt="Imagem do Carrosel três" title="Imagem do Carrosel três"></span>3</a>
   <a href="#"><span><img src="galeria/data1/tooltips/carrossel_04.png" width="230" height="80" alt="Imagem do Carrosel quatro" title="Imagem do Carrosel quatro"></span>3</a>
  </div> <!-- Fim da pré-visualização do carrossel -->
</div>
	</section>
<div class="ws_script" style="position:absolute;left:-99%">
  <a href="#"></a>
</div>

<div class="ws_shadow"></div>
</div>


<!-- Links das páginas de bolos e doces -->

<?php include("_linksBolos.php");?>
	


<div class="alert alert-dark text-center texto-logo shadow-lg p-3 mb-5 rounded" style="background-color: #51B07C;">
	<h2>Lançamentos</h2> 
</div>

<!-- Container de formatação e responsividade para a seção de bolos -->
<?php include("_cards.php");?>
<!-- OBS: o Rodapé está dentro do main -->


<!-- Rodapé padrão Início -->
<?php include("_rodape.php");?>
<!-- Rodapé padrão Fim -->

</main> 
	  
   
<?php 
	  // Libera a memória associada ao resultado do Banco de dados
	mysqli_free_result($rs_edi);
		
	// Fecha a conexão ao banco de dados
	mysqli_close($conn_bd_edibolos);
    ?> 
   <script src="pwa/myscripts.js"></script>

</body>
</html>
