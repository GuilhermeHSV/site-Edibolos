<?php require("conexao.php"); // Requerimento de conexão ao banco de dados ?>

<?php
$query_rs_edi = "SELECT * FROM tb_produts WHERE tb_produts.ativo = 1 and tb_produts.id_Area = 1 OR tb_produts.id_Area = 2 ORDER BY tb_produts.id_Produts DESC";
$rs_edi = mysqli_query($conn_bd_edibolos, $query_rs_edi) or die(mysqli_error($conn_bd_edibolos));
$totalRow_rs_edi = mysqli_num_rows($rs_edi);
$row_rs_edi = mysqli_fetch_assoc($rs_edi);

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
    <title>Edi Bolos - Pagina bolos</title><!--Título da página-->
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
<section>
<div class="alert alert-dark text-center texto-logo shadow-lg p-3 mb-1 rounded" style="background-color: #51B07C;">
	<h2 class="fonte-zero">Total de bolos encontrados</h2>
  Todos os Bolos:
<?php echo($totalRow_rs_edi); ?>
  </div>
	</section>
  <?php include("_cards.php");?>


<!--OBS: o Rodape está dentro do main--> 

<!--Rodape Inicio-->    
<?php include("_rodape.php");?>
<!--Rodape Fim-->

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