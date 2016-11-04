$("document").ready(function(){
  alert("Ejercicio 21");

  var label = $("label").html();

  $("input").val(label);

  $("input").addClass("hint");

  $("label").remove();

  $("input").on("focus",function(){
    if($(this).val()==label){
      $(this).val("");
      $(this).removeClass("hint");
    }
  });

  $("input").on("blur",function(){
    var comprueba = $(this).val();
    if(comprueba == ""){
      $(this).val(label);
      $(this).addClass("hint");
    }
  });
});
