window.onload=function(){

  var button1 = document.getElementById('bu1');
  var button2 = document.getElementById('bu2');
  var windowopen;

  button1.onclick = function(){
    windowopen = window.open("","_blank","width=100px, height=100px");
    windowopen.document.body.style.backgroundColor = "red";
    button2.disabled=false;
  }

  button2.onclick = function(){
    windowopen.resizeTo(250,250);
    windowopen.focus();
  }
}
