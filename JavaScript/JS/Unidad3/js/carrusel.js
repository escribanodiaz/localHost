window.onload=function() {
    var img =document.getElementById("img");
    var img1 = document.getElementById("img1");
    var img2 = document.getElementById("img2");
    var img3 = document.getElementById("img3");
    var img4 = document.getElementById("img4");

    img1.onmouseout=function(){
      img1.style.width="100px";
      img1.style.height="100px";
    }
    img1.onclick=function(){
      img.setAttribute("src","http://www.imagenesderisa.com.mx/wp-content/uploads/2015/10/imagenes-graciosas-1.jpg");
    }

    img2.onmouseover=function(){
      img2.style.width="250px";
      img2.style.height="250px";
    }
    img2.onmouseout=function(){
      img2.style.width="100px";
      img2.style.height="100px";
    }
    img2.onclick=function(){
      img.setAttribute("src","http://www.lonuevodehoy.com/wp-content/uploads/2014/06/imagenes-graciosas.jpg");
    }
    img3.onmouseover=function(){
      img3.style.width="250px";
      img3.style.height="250px";
    }
    img3.onmouseout=function(){
      img3.style.width="100px";
      img3.style.height="100px";
    }
    img3.onclick=function(){
      img.setAttribute("src","https://66.media.tumblr.com/2884862c46224f52d279383f7a5ea446/tumblr_o6851eQrnM1uhsz1to1_500.jpg");
    }
    img4.onmouseover=function(){
      img4.style.width="250px";
      img4.style.height="250px";
    }
    img4.onmouseout=function(){
      img4.style.width="100px";
      img4.style.height="100px";
    }
    img4.onclick=function(){
      img.setAttribute("src","http://sd.keepcalm-o-matic.co.uk/i/keep-calm-and-dab-224.png");
    }
}
