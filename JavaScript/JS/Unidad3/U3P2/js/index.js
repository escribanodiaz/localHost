window.onload=function(){

  //Formulario
  var body = document.getElementsByTagName("body")[0];
  var h1 = document.createElement("h1");
  h1.innerHTML="Incio de Sesion";
  body.appendChild(h1);

    //label y input
      var label = document.createElement("label");
      label.innerHTML="Usuario: ";
      body.appendChild(label);
      var usuario = document.createElement("input");
      usuario.setAttribute("type","text");
      usuario.setAttribute("id","usu");
      body.appendChild(usuario);

      var label1 = document.createElement("label");
      label1.innerHTML="Contaseña: ";
      body.appendChild(label1);
      var contraseña = document.createElement("input");
      contraseña.setAttribute("type","password");
      contraseña.setAttribute("id","contra");
      body.appendChild(contraseña);

      var boton = document.createElement("input");
      boton.setAttribute("type","submit");
      boton.setAttribute("id","boton");
      boton.setAttribute("value","Submit");
      body.appendChild(boton);

      var txt = document.createElement("p");
      body.appendChild(txt);
      usuario.focus();
      //funcion del focus
      usuario.onblur=function(){
        var v = document.getElementById("usu");
        if(v.value==""){
          txt.innerHTML="Error no has introducido nada";
          usuario.style.border = "thick groove red";
          usuario.focus();
        }
        else {
          txt.innerHTML="";
            usuario.style.border = "";
        }
      }

      contraseña.onblur=function(){
        var c = document.getElementById("contra");
        if(c.value==""){
          txt.innerHTML="Error no has introducido nada";
          contraseña.style.border = "thick groove red";
          contraseña.focus();
        }
        else {
          txt.innerHTML="";
            contraseña.style.border = "";
        }
      }

      //Seguridad de la contraseña
      var hasLetters, hasNumbers, hasSymbols = false;
      contraseña.onkeypress=function(event){
        if((event.charCode>=65 && event.charCode<=90) || (event.charCode>=97 && event.charCode<=122)){
          hasLetters=true;
        }

        if((event.charCode>=48 && event.charCode<=57)){
          hasNumbers = true;
        }

        if(event.charCode==41 || event.charCode==45 || event.charCode==95){
          hasSymbols = true;
        }

        if(hasLetters && !hasNumbers && !hasSymbols){
          txt.innerHTML = "Your password strength is LOW";
        }else if((hasLetters && hasNumbers && !hasSymbols) || (hasLetters && !hasNumbers && hasSymbols)){
          txt.innerHTML = "Your password strength is MEDIUM";
        }else if(hasLetters && hasNumbers && hasSymbols){
          txt.innerHTML = "Your password strength is HARD";
        }
}
}
