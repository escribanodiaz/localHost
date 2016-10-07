window.onload=function(){
  var textfield = document.getElementById("text");

  textfield.onkeypress=function(){
    var num = event.charCode;
    if(num == 113 || num == 81 || num == 110 || num==78 || num == 120 || num == 88){
      return false;
    }
  }
}
