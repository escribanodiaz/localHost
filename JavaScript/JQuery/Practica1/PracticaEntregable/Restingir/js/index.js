$("document").ready(function() {
  alert("The Forbiedden KeyBoard!!!");
  $("#text").on("keypress",function(eventos){
    if(eventos.charCode == 113 || eventos.charCode == 81 || eventos.charCode == 110 || eventos.charCode==78 || eventos.charCode == 120 || eventos.charCode == 88){
      return false;
    }
  });
});
