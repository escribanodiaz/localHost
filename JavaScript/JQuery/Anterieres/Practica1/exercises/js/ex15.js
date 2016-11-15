$("document").ready(function(){
  alert("Hello");

  $("button")
    .on('click',function(){
        alert($('input:first').val());
        $("input:first").val("Toni");
          $("input:checkbox:checked").each(function(){
          $(this).attr("checked","true");
        });
   });
});
