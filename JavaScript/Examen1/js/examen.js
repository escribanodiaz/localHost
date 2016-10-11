window.onload=function(){
    var body = document.getElementsByTagName("body");
    body[0].style.backgroundImage = "url('img/bckg_image.jpg')";

    var h1 = document.createElement("h1");
    h1.appendChild(document.createTextNode("Examen Javascript"));
    body[0].appendChild(h1);

    var div = document.createElement("div");
    div.style.position="absolute";
    body[0].appendChild(div);


    var img1 = document.createElement("img");
    img1.setAttribute("src", "img/bulbasur.png");
    img1.style.width="150px";
    img1.style.position="relative";
    div.appendChild(img1);

    var br = document.createElement("br");
    div.appendChild(br);

    var img2 = document.createElement("img");
    img2.setAttribute("src", "img/charmander.png");
    img2.style.width="150px";
    img2.style.position="relative";
    div.appendChild(img2);

    var br2 = document.createElement("br");
    div.appendChild(br2);

    var img3 = document.createElement("img");
    img3.setAttribute("src", "img/pikachu.png");
    img3.style.width="150px";
    img3.style.position="relative";
    div.appendChild(img3);

    var d1;
    var d2;
    var d3;
    var total=0;

    img1.onclick=function(){
        if (d1) {
        img1.style.width="150px";
        img1.style.left="0";
        d1=false;
        total=total-1;
      }
      else {
        img1.style.left="1200px";
        d1=true;
        total=total+1;
        boton();
      }

    }

    img2.onclick=function(){
      if (d2) {
      img2.style.width="150px";
      img2.style.left="0";
      d2=false;
      total=total-1;
    }
    else {
      img2.style.left="1200px";
      d2=true;
      total=total+1;
      boton();
    }
    }
    img3.onclick=function(){
      if (d3) {
      img3.style.width="150px";
      img3.style.left="0";
      d3=false;
      total=total-1;
    }
    else {
      img3.style.left="1200px";
      d3=true;
      total=total+1;
      boton();
    }
    }

    img1.onmouseover=function(){
      if(d1){
      img1.style.width="350px";
      }
    }

    img1.onmouseout=function(){
      if(d1){
      img1.style.width="150px";
      }
    }

    img2.onmouseover=function(){
      if(d2){
      img2.style.width="350px";
      }
    }

    img2.onmouseout=function(){
      if(d2){
      img2.style.width="150px";
      }
    }

    img3.onmouseover=function(){
      if(d3){
      img3.style.width="350px";
      }
    }

    img3.onmouseout=function(){
      if(d3){
      img3.style.width="150px";
      }
    }

  function boton(){
      if(total==3){
        var bucss = document.createElement("button");
        bucss.setAttribute("type" , "button");
        bucss.setAttribute("name" , "call");
        bucss.setAttribute("id" , "b1");
        bucss.style.position="absolute";
        bucss.style.right="0";
        bucss.style.top="630px";
        bucss.appendChild(document.createTextNode("Call my pokemons"));
        body[0].appendChild(bucss);
        b1.onclick = function(){
          img1.style.left="0";
          img2.style.left="0";
          img3.style.left="0";
          b1.style.opacity="0";
          d1=false;
          d2=false;
          d3=false;
          total=0;
        }
      }
  }
}
