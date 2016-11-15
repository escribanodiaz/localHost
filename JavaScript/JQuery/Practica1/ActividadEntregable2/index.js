// Toggle Function
$('.toggle').click(function(){
  // Switches the Icon
  $(this).children('i').toggleClass('fa-pencil');
  // Switches the forms
  $('.form').animate({
    height: "toggle",
    'padding-top': 'toggle',
    'padding-bottom': 'toggle',
    opacity: "toggle"
  }, "slow");
});

$("document").ready(function(){
  $("#text").focus();
  $("#text").on("blur",function(){
    var comprueba = $(this).val();
    if(comprueba == ""){
      $(this).css("border","1px solid red");
      $(this).focus();
    }
    else {
      $(this).css("border","1px solid #D9D9D9");
    }
  });

  $("#pwd1").on("blur",function(){
    var comprueba = $(this).val();
    if(comprueba == ""){
      $(this).css("border","1px solid red");
      $(this).focus();
    }
    else {
      $(this).css("border","1px solid #D9D9D9");
    }
  });

  $("#pwd2").on("blur",function(){
    var comprueba = $(this).val();
    if(comprueba == ""){
      $(this).css("border","1px solid red");
      $(this).focus();
    }
    else {
      $(this).css("border","1px solid #D9D9D9");
    }
  });

    var hasLetters, hasNumbers, hasSymbols = false;
    $("#pwd1").on("keyup",function(evento){
      if(evento.keyCode == 8){
        if($("#pwd1").val() == ""){
          hasLetters = false;
          hasNumbers = false;
          hasSymbols = false;
        }
        else {
          $(this).each(function(){
            var cadena = $("#pwd1").val();
            var compcadena  = cadena.substr(-1);
          var numchar = compcadena.charCodeAt(0);

            if((numchar >=65 && numchar <=90) || (numchar >= 97 && numchar <= 122)){
              hasNumbers = false;
              hasSymbols = false;
            }
            else if(numchar >= 48 && numchar <=57){
              hasSymbols = false;
            }
          });
        }

      }

      if((evento.keyCode>=65 && evento.keyCode<=90)){
          hasLetters=true;
        }

        if((evento.keyCode>=48 && evento.keyCode<=57 || evento.keyCode>=96 && evento.keyCode<=105)){
          hasNumbers = true;
        }

        if(evento.keyCode==189 || evento.keyCode==187 || evento.keyCode==220){
          hasSymbols = true;
        }

        if(hasLetters && !hasNumbers && !hasSymbols || !hasLetters && hasNumbers && !hasSymbols){

          $(".fuerzapwd").css("display","block");
          $(".low").css({"display":"block","background-color":"red"});
          $(".medium").css({"display":"none","background-color":"yellow"});
          $(".hard").css({"display":"none","background-color":"green"});

        }else if((hasLetters && hasNumbers && !hasSymbols) || (hasLetters && !hasNumbers && hasSymbols)){

          $(".fuerzapwd").css("display","block");
          $(".medium").css({"display":"block","background-color":"yellow"});
          $(".low").css({"display":"block","background-color":"yellow"});
          $(".hard").css({"display":"none","background-color":"green"});

        }else if(hasLetters && hasNumbers && hasSymbols){

          $(".fuerzapwd").css("display","block");
          $(".medium").css({"display":"block","background-color":"green"});
          $(".hard").css("display","block");
          $(".low").css({"display":"block","background-color":"green"});
        }
        else if(!hasLetters && !hasNumbers && !hasSymbols){

            $(".fuerzapwd").css("display","none");
            $(".low").css({"display":"none","background-color":"red"});
            $(".medium").css({"display":"none","background-color":"yellow"});
            $(".hard").css({"display":"none","background-color":"green"});
        }

    });


    $("#loginButton").on("click",function(){
      var pass = $("#pwd1").val();
      var confirmpass = $("#pwd2").val();
      if(confirmpass != pass){
        $(".alert").css({"display":"block","color":"red"});
        $("#pwd2").css("border","1px solid red");
      }
      else {
        $(".alert").css("display","none");
        $("#pwd2").css("border","1px solid #D9D9D9");
      }
    });

});
