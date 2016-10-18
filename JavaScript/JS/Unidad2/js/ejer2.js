
function ejer(){
  var confirma = confirm("Press a Button");

    if(confirma){
      setTimeout("alert('Press a aceptar');",2000);
      setTimeout("ejer();",2100);
    }
    else {
          setTimeout("alert('Press a cancel');",2000);
        }
}

ejer();
