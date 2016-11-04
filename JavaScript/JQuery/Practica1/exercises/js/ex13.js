$("document").ready(function(){
  alert("Hello");
  $("li[value='Ironman']").clone().appendTo("ul");
  $("p:first").css({
    "border":"1px solid red",
    "background-color":"yellow"
  });
  $("li:first").remove();
  $(".avengers *").each(function(){
    $(this).empty().html("Ha cambiado");

  });

});
