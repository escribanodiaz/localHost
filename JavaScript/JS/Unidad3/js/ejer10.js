window.onload=function(){

  var h1 = document.createElement("h1");
  h1.appendChild(document.createTextNode("Welcome"));
  document.getElementsByTagName("body")[0].appendChild(h1);

    var img2 = document.createElement("img");
    img2.setAttribute("src","https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Mona_Lisa,_by_Leonardo_da_Vinci,_from_C2RMF_retouched.jpg/275px-Mona_Lisa,_by_Leonardo_da_Vinci,_from_C2RMF_retouched.jpg");
    var br =  document.createElement("br");
    h1.appendChild(br);
    h1.appendChild(img2);

function triplefuncion(){
  img2.style.width="500px";
  img2.style.height="500px";
  img2.onmouseover=function(){
    img2.src="https://66.media.tumblr.com/2884862c46224f52d279383f7a5ea446/tumblr_o6851eQrnM1uhsz1to1_500.jpg";
  }

  img2.onmouseout=function(){
      img2.setAttribute("src","https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Mona_Lisa,_by_Leonardo_da_Vinci,_from_C2RMF_retouched.jpg/275px-Mona_Lisa,_by_Leonardo_da_Vinci,_from_C2RMF_retouched.jpg");
  }

  img2.onclick=function(){
    alert ("Stop clicking me!!");
  }
}
triplefuncion();

}
