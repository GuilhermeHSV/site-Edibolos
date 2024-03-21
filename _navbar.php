<section><!--Inicio do Navbar-->
<h2 class="fonte-zero">Menu: Início, Bolos, Sobre, Contato, Bolos Caseiros, Bolos de Festa, Slice Cakes e Cupcakes</h2>
<div class="container-fluid c-cont-nav"><!--Container com formatação Bootstrap-->

      <!--Barra de navegação com os textos linkados para as outras páginas do site.-->
  <nav class="navbar navbar-expand-lg ml-4" style="background-color: #df318e;">

    
    <a id="modifyHome" class="navbar-brand bottom-home color-links" href="index.php">Início</a><!--Link para a página index.php-->

    <button id="animationBar" class="navbar-toggler bg-light border border-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
        <img id="trocaImgBar" class="img-fluid" src="imgs/icon-navbar.png" alt="Menu de navegaçào" title="Menu de navegaçào">
      </span> 
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link fonte-Yantramanav color-links" href="page_bolos.php" title="Bolos">Bolos<span class="sr-only"></span></a><!--Link para a página page_bolos.php-->
        </li>

        <li class="nav-item">
          <a class="nav-link fonte-Yantramanav color-links" href="page_sobre.php" title="Sobre">Sobre</a><!--Link para a página page_sobre.php-->
        </li>

        <li class="nav-item">
         
        </li>


        <li class="nav-item dropdown fonte-Yantramanav">
          <a class="nav-link dropdown-toggle color-links" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><!--botão dropdown com mais opções-->
            Produtos
          </a>
          
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="links-drop text-dark fonte-Yantramanav py-1" href="bolosCaseiros.php"  title="Página de bolos caseiros">Bolos Caseiros</a><!--Link para a página bolosCaseiros.php-->
            <div class="dropdown-divider"></div>
            <a class="links-drop text-dark fonte-Yantramanav py-1" href="bolosFesta.php"  title="Página de Bolos de festa">Bolos de Festa</a><!--Link para a página bolosFesta.php-->
            <div class="dropdown-divider"></div>
            <a class="links-drop text-dark fonte-Yantramanav py-1" href="bolosSlice.php"  title="Página de SliceCakes">Slice Cakes</a><!--Link para a página bolosSlice.php-->
            <div class="dropdown-divider"></div>
            <a class="links-drop text-dark fonte-Yantramanav py-1 " href="Cupackes.php"  title="Página de Cupcakes">Cupackes</a><!--Link para a página Cupackes.php-->
          </div>
        </li>
      </ul>

      <!--Barra de Pesquisa-->
      <form class="form-inline my-2 my-lg-0" action="pesquisa.php" method="get" id="form_busca" >
        <input class="form-control mr-sm-2 fonte-Yantramanav border border-dark" style="border-radius: 8px;"  name="palavra" id="palavra" type="text" required="required" placeholder="Procurar" aria-label="Search">
        <button class="btn btn-custom my-2 my-sm-1 text-light fonte-Yantramanav" style="border-radius: 8px;" type="submit">Buscar</button>
      </form>

    </div>
  </nav><!--Fim do Navbar.-->
</div>
</section>
