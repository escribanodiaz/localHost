
    alert("Hello");

    var p1 = $("p:eq(0)").html();
    var p2 = $("p:eq(1)").html();

    var texto = "<p>"+p1 +p2+"</p>";

    $(texto).insertAfter("div");
