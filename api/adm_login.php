<?php
include('_complementos.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<title>Acesso Administrativo</title>
<head>

<style>
    .centro {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
}
.di-margin{
    margin: 130;
    
}



</style>

<body style="background-color: #212529;font-family: cursive; ">
<header style="margin: 0;">

<ul style="background-color:#216741;margin: 0;" class="list-inline">
  

  <li class="list-inline-item ">
  <a class="color-links nav-link" href="index.php">
 <img width="30" height="30" src="imgs\imgsAdm\voltar.png" alt="Logo da loja EdiBolos">VOLTAR PARA A HOME</a>
 </li>

 <li class="list-inline-item ml-4">
  <a class="color-links nav-link" href="adm_login.php">
 <img class="mr-1" width="30" height="30" src="imgs\imgsAdm\cadeado.png" alt="Logo da loja EdiBolos">FAÇA LOGIN PARA ADMINISTRAR</a>
 </li>

</ul>

</header>
<br><br><br><br>
<form action="adm_verificar.php" method="post">
<div class="centro mb-5" style="background-color: #212529">
  <div class="di-margin" style="background-color: #F8F0F3;  border-radius: solid 1px #DF318E; border-radius: 10px" >
      <p class="mt-4" style="color:#DF318E; font-family: cursive; font-weight: 900;">FAÇA LOGIN:</p>

      <div class="mt-3 ml-5 mr-5" style="color:#DF318E; font-family: cursive; font-weight: 900;">
      EMAIL : <input name="email" type="email" required="required" id="email" size="50"><br><br>
      </div>

      <div class="mb-5 ml-5 mr-5 mt-1" style="color:#DF318E; font-family: cursive; font-weight: 900; ">
      SENHA : <input name="senha" type="password" required="required" id="senha" cols="30"size="43">

      <input style="background-color:#216741; color: #FFFFFF" class="btn py-1" type="submit">

      </div>
  </div>
</div>
</form>
</body>
</html>