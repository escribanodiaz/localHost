$("document").ready(function() {

  $("#btnaction").on('click', function(){
      var selectionEffect = $(".effect:checked").val();
      var selectionSpeed = $(".speed:checked").val();
      if (selectionEffect == "fadeTo") {
        var opacity = $("#opacity").val();
        if(selectionSpeed == "milliseconds"){
        var speed = $("#speed").val();
          $("#image")[selectionEffect](speed,opacity);
        }
        else if (opacity > 1) {
          $("<p class='a'>The opacity must be between 0 and 1</p>").insertAfter("#opacity");
        }else {
          $("#image")[selectionEffect](selectionSpeed,opacity);
        }
      }
        $("#image")[selectionEffect](selectionSpeed);
      });



  $(".effect:radio").on('change', function() {
    var selection = $(".effect:radio:checked").val();
    if (selection == "fadeTo") {
      $("#opacity").removeAttr("disabled");
    }else {
      $("#opacity").attr("disabled", "true");
      $("#opacity").val("");
    }
  });

  $(".speed:radio").on('change', function() {
    var selection = $(".speed:radio:checked").val();
    if (selection == "milliseconds") {
      $("#speed").removeAttr("disabled");
    }else {
      $("#speed").attr("disabled", "true");
      $("#speed").val("");
    }
  });

});
