  function trocarImgLogo(){

var imgAtual = "imgs/logo-370x97.png";
var imgNova = "imgs/logo-178x47.png";
var LarguraDaTela = window.innerWidth;

  if (LarguraDaTela < 480){
    document.getElementById("imgLogo").src = imgNova;
  } 
  else {
    document.getElementById("imgLogo").src = imgAtual;
  }
};

window.addEventListener("resize", trocarImgLogo);
window.addEventListener("load", trocarImgLogo);


