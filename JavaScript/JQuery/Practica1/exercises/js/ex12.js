$("document").ready(function(){
  alert("Hello");
  $("img").each(function(){
    var text = this.alt;
    $(this).replaceWith("<span>"+text+"</span>");
  });
});
