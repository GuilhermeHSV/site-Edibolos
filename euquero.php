<?php require("conexao.php");
include("_complementos.php");
?>


<?php 
//criando a variavel para consultar no banco de dados por id de cada bolo e usar como passagem de parametro no link Eu quero ssssssss
if(isset($_GET['id_Produts'])){
$id_Produts = $_GET['id_Produts'];
}


// Criando a consulta com o banco de dados
// O conteudo da pagina devera vir da consulta ao banco de dados
$query_rs_edi = "SELECT * FROM tb_produts WHERE tb_produts.ativo = 1 AND tb_produts.id_Produts = $id_Produts";

// Executar a consulta ao banco de dados
$rs_edi = mysqli_query($conn_bd_edibolos, $query_rs_edi) or die(mysqli_error($conn_bd_edibolos));


//Total de registro encontrado na consulta ao banco de dados
$totalRow_rs_edi = mysqli_num_rows($rs_edi);


// Obter UMA linha do resultado como a array
$row_rs_edi = mysqli_fetch_assoc($rs_edi);

if($row_rs_edi == 0){
	header('location: index.php');
};

//variáveis para dar infomações do produto no wpp.
$nome_bolo = $row_rs_edi['titulo'];
 $preco_bolo = $row_rs_edi['preco'];
   $id_bolo = $row_rs_edi['id_Produts'];
$mensagem_whatsapp = "Identificação do produto: $id_bolo\nOlá Edinalva, interessei-me pelo produto : $nome_bolo\nPreço: $preco_bolo";
        $mensagem_whatsapp_encoded = urlencode($mensagem_whatsapp);
          $numero_vendedor = '5511984455345';
            $link_whatsapp = "https://api.whatsapp.com/send?phone=$numero_vendedor&text=$mensagem_whatsapp_encoded";

?>


<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">

<meta charset="UTF-8"><!-- Codificação dos caracteres da página -->
    <meta name="description" content="A Edi Bolos é a loja mais famosa do bairro, com os seus incríveis e deliciosos doces e bolos."><!-- Descrição da página -->
    <meta name="keywords" content="bolos,bolo,loja,doces,chocolate,chocolates,caseiros,confeitaria,sobremesas,cupcakes,encomendas,aniversario,festas,pote,brownie"><!-- Palavras-chave para busca via motor de pesquisa -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Viewport para dispositivos móveis -->
    <meta name="language" content="pt-BR"><!-- Idioma para motor de pesquisa-->
    <link rel="stylesheet" href="galeria/engine1/style.css"><!-- Estilos do carrossel -->
    <script src="galeria/engine1/jquery.js"></script><!-- jQuery para o carrossel -->
    <link href="bootstrap441/css/bootstrap.min.css" rel="stylesheet" type="text/css"><!-- Estilos do Bootstrap -->
    <link href="bootstrap441/js/bootstrap.min.js" rel="stylesheet" type="text/js"><!-- Scripts do Bootstrap -->
    <link rel="stylesheet" href="style.css" media="all"> <!-- Estilos personalizados -->
    <link rel="shortcut icon" href="imgs/favicon_84x87.png" type="image/x-icon"><!-- Ícone da página -->
    <title><?php echo($row_rs_edi["titulo"]) ?></title><!--Título da Página puxado do titulo do Produto no banco de dados-->
    <!--API do Botão do Whatsapp por:JivoChat -->
    <script type="text/javascript">(function () {var options = {whatsapp: "+5511984455345",company_logo_url: "", greeting_message: "Olá!", call_to_action: "Entre em contato conosco!", position: "right", };var proto = document.location.protocol, host = "jivo.link", url = proto + "//" + host;var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/ferramentas-de-marketing/jivowpp.js';s.onload = function () { WhWidgetSendButton.init(host, proto, options); };var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);})();</script>
</head>

<header>
<!-- Inicio Topo Parão-->     
<?php include("_topo.php"); ?>
<!-- FIM Topo Padrão-->    
</header>
<!-- Inicio navbar Parão--> 
<?php include("_navbar.php"); ?>
<!-- FIM navbar Padrão-->    

<main>
    <!--Carrosel-->
<section>
  <h2 class="fonte-zero">Content main</h2>
<main style="background-color: #ffe6d1"> <!--start main-->
<section>
  <h2 class="fonte-zero">Galeria de Imagens</h2>

</section>

<!-- Conteúdo -->   
<!--Puxa título do produto que está no banco de dados, abaixo do carrossel-->
<div class="alert alert-dark text-center texto-logo shadow-lg p-3 mb-5 rounded container-fluid" style="background-color: #51B07C;">
<h2><?php echo($row_rs_edi["titulo"]) ?></h2>

</div>
<body>
<div class="container-fluid">
    <div class="container">
        <section>    
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <a title="<?php echo($row_rs_edi["titulo"]) ?>">
                        <img class="mb-4 img-fluid" src="imgs/upload/<?php echo($row_rs_edi["imgThumb"]) ?>" alt="<?php echo($row_rs_edi["titulo"]) ?>" title="<?php echo($row_rs_edi["titulo"]) ?>">
                    </a>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                   
                    <p style="font-size: 22px; font-family: 'Yantramanav';"><?php echo($row_rs_edi["descricao"]) ?></p>
                    <div class="row">
                         <div class="col-xl-12">
                            <strong class="fonte-euquero-demais">Preço:</strong> R$<?php echo($row_rs_edi["preco"]) ?>
                        </div>
                        <div class="col-xl-12">
                            <strong class="fonte-euquero-demais">Recheio:</strong> <?php echo($row_rs_edi["recheio"]) ?>
                        </div>
                        <div class="col-xl-12">
                            <strong class="fonte-euquero-demais">Decoração:</strong> <?php echo($row_rs_edi["decoracao"]) ?>
                        </div>
                        <div class="col-xl-12">
                            <strong class="fonte-euquero-demais">Cobertura:</strong> <?php echo($row_rs_edi["cobertura"]) ?>
                        </div>
                        <div class="col-xl-12">
                            <strong class="fonte-euquero-demais">Massa:</strong> <?php echo($row_rs_edi["massa"]) ?>
                        </div>
                        <div class="col-xl-12">
                            <strong class="fonte-euquero-demais">Tema:</strong> <?php echo($row_rs_edi["tema"]) ?>
                        </div>
                        <div class="col-xl-12 mb-4">
                            <strong class="fonte-euquero-demais">Peso:</strong> <?php echo($row_rs_edi["kgpeso"]) ?>Kg 
                        </div>

                        <div class="container mb-3">
    <div class="row">
        <div class="col-md-0 col-lg-6 mx-auto">
            <div class="text-center texto-logo shadow-lg py-2 rounded color-links nav-link" style="background-color: #216741;">
             <a style="font-family: sans-serif; text-decoration: none;" target="_blank" class="color-links" href="<?php echo $link_whatsapp;?>">Peça Agora</a>
            </div>
        </div>
    </div>
</div>


      </div>
                </div>
            </div>
        </section>
    </div>
</div>
<br>
<?php 
	
	mysqli_free_result($rs_edi);
		
		
		//fecha conexao ao banco de dados
	mysqli_close($conn_bd_edibolos);
		
    ?>

</main>
<!--Scripts Javascript da galeria e carrossel-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
<script src="js/animation_home.js" ></script>

</body>
<script src="js/animation_home.js" ></script>
<?php include("_rodape.php");?><!--Rodapé Padrão-->
<?php include("_complementos.php");?><!--Scripts Padrão da página-->



