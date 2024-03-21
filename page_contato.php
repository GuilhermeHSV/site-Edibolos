<!DOCTYPE html>
<html lang="pt-BR">
    
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Pagina de contato Edi Bolos.">
    <meta name="keywords" content="bolos,bolo,loja,doces,chocolate,chocolates,caseiros,confeitaria,sobremesas,cupcakes,encomendas,aniversario,festas,pote,brownie">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="language" content="pt-BR">
    <link href="bootstrap441/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="bootstrap441/js/bootstrap.min.js" rel="stylesheet" type="text/js">
    <link rel="stylesheet" href="style_contato.css"> 
    <link rel="shortcut icon" href="imgs/favicon_84x87.png" type="image/x-icon">
    <title>Contato | Edi Bolos</title>
    <script type="text/javascript">(function () {var options = {whatsapp: "+5511984455345",company_logo_url: "", greeting_message: "Olá!", call_to_action: "Entre em contato conosco!", position: "right", };var proto = document.location.protocol, host = "jivo.link", url = proto + "//" + host;var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/ferramentas-de-marketing/jivowpp.js';s.onload = function () { WhWidgetSendButton.init(host, proto, options); };var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);})();</script>

</head>

<body>
  <h2 class="fonte-zero">Página html</h2>

<!-----------------------------||INÍCIO DO HEADER||----------------------------------->     
<header> 

<!--Topo--> 
<?php include("_topo.php");?>


<!--Navbar--> 
<?php include("_navbar.php");?>

</header>
<!-----------------------------||FIM HEADER||-----------------------------------> 


            <!--INICIO MAIN-->

<main style="font-family:'Yantramanav', 'Arial Narrow','Arial';">

    <!-- INICIO BANNER-->

    <div class="container-fluid" style="padding: 0; margin: 0; position: relative;">
      <img src="imgs/banner-contato.png" alt="banner-contato" class="image-banner">
    </div>
    <div class="alert alert-dark text-center texto-logo shadow p-3 mb-5 rounded" style="background-color: rgb(81, 176, 124);">
      Contato
    </div>
    <!--FIM BANNER-->

<!--INICIO Formulario de contato -->

<div class="container mt-5">
  <div class="row">
    <div class="col-12 col-md-6 px-5">

    <form action="https://formspree.io/f/mqkvvrza" method="POST"> 

      <div class="form-group">
          <label for="formGroupExampleInput" >Nome:</label>
          <input type="text" name="Nome" class="form-control" id="formGroupExampleInput" placeholder="Nome" required>
        </div>

        <div class="form-group">
          <label for="formGroupExampleInput2">Email:</label>
          <input type="email" name="Email"  class="form-control" id="formGroupExampleInput2" placeholder="Email" required>
        </div>

        <div class="form-group">
          <label for="formGroupExampleInput2">Telefone:</label>
          <input type="tel" name="Telefone"  class="form-control" id="formGroupExampleInput2" placeholder="(XX) XXXX-XXXX" required>
        </div>
      </div>

      <div class="col-12 col-md-6 px-5">
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Mensagem:</label>
          <textarea class="form-control" name="Mesagem" id="exampleFormControlTextarea1" rows="8" cols="50" placeholder="Deixe uma mensagem..." required></textarea>
        </div>

        <div class="form-check mt-5 mb-5">
          <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
          <label class="form-check-label" for="exampleCheck1">Declaro que li e concordo com os <a href="termos_condicoes.php" style="color:#0000FF">Termos e Condições</a> e a <a href="politica_privacidade.php" style="color:#0000FF">Política de Privacidade</a> da Edi Bolos</label>
        </div>

   <div class="col-12 text-center my-5">
      <button  type="submit" class="btn btn-primary" target="_blank" >Enviar</button>
    </div>
    
    </div>
  </div>
</div>
      </div>
    </form>
  </div>
</div>
</div>
<!--FIM form-->


</main><!--Fim main-->

<!--Rodape Inicio-->    
<?php include("_rodape.php");?>
<!--Rodape Fim-->


</main>
</section>
<!-----------------------------||FIM DO MAIN||----------------------------------->     

<!--links JS-->
<?php include("_complementos.php");?>
    
<script src="js/animation_home.js" ></script>

</section>
</body>
</html>
