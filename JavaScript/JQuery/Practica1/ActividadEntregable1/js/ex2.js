$("document").ready(function(){
  alert("EX2");

  $("<style type='text/css'>.field{border: 1px solid black;margin: 5px 0;}</style>").appendTo("head");

  $("label:eq(0)").addClass("caja1");
  $("#name").addClass("caja1");
  $(".caja1").wrapAll("<div class=field></div>");

  $("label:eq(1)").addClass("caja2");
  $("#email").addClass("caja2");
  $(".caja2").wrapAll("<div class=field></div>");

  $("label:eq(2)").addClass("caja3");
  $("#subject").addClass("caja3");
  $(".caja3").wrapAll("<div class=field></div>");

  $("label:eq(3)").addClass("caja4");
  $("#message").addClass("caja4");
  $(".caja4").wrapAll("<div class=field></div>");



  $("#name").on("blur",function(){
    if($(this).val() == ""){
      $(this).focus();
    }
  });

  $("#email").on("blur",function(){
    if($(this).val() == ""){
      $(this).css("background-color","red");
      $("<p class=mensaje>No has escrito nada</p>").insertAfter("label:eq(0)");
      $(".mensaje").css({"position":"absolute","margin-top":"5.9px", "margin-left": "250px","color":"black"});
    }
    else{
      $(this).css("background-color","white");
      $(".mensaje").css("color","white");
    }
  });

  $("input[type=button]").one("click",function(){
    alert("Hola");
  })

});
