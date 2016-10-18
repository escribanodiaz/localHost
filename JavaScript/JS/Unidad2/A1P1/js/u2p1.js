window.onload=function(){

var imagen = document.createElement("img");
imagen.setAttribute("src", "js/img1.jpg");
document.getElementsByTagName("div")[2].appendChild(imagen);

var formcon = document.querySelectorAll("form");
var hijos = formcon[0].querySelectorAll("*");
alert("Los hijos del form son: " +hijos.length);

var valor = document.getElementById('inp1');
var bot1 = document.getElementById('b1');
var bot2 = document.getElementById('b2');

bot1.onclick = function(){
  if(valor.value == "" ){
    var error = document.createElement("p");
    error.appendChild(document.createTextNode("El campo input no esta relleno"));
    error.style.color="red";
    document.querySelectorAll("form")[0].appendChild(error);
  }
}

bot2.onclick = function(){
  var bucss = document.createElement("button");
  bucss.setAttribute("type" , "button");
  bucss.setAttribute("name" , "css");
  bucss.setAttribute("id" , "b3");
  bucss.appendChild(document.createTextNode("Css"));
  document.querySelectorAll("form")[0].appendChild(bucss);
  var css = document.getElementById('b3');
  css.onclick = function(){
    document.querySelectorAll("body")[0].style.backgroundColor="yellow";
  }//Lo del css no me acordaba y lo unico que se me a venido a la cabeza a sido esto
}



}
