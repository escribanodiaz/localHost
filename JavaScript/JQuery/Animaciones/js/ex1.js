$("document").ready(function(){
  alert("EX1");

  $("#efecto").on("click",function(){
  var botones = $("input:radio:checked").val();
    $("#monalisa")[botones](1000);
  });

  /*$("#b1").on("click",function(){
    $("#monalisa").show(2000,function(){
      alert("Callback show");
    });
  });

  $("#b2").on("click",function(){
    $("#monalisa").hide(2000,function(){
      alert("Callback hide");
    });
  });

  $("#b3").on("click",function(){
    $("#monalisa").toggle(2000,function(){
      alert("Callback toggle");
    });
  });*/

});
