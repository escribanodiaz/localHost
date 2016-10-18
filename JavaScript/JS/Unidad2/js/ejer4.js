window.onload=function(){

  var button1 = document.getElementById('bu1');
  var button2 = document.getElementById('bu2');
  var button3 = document.getElementById('bu3');
  var button4 = document.getElementById('bu4');
  var img1 = document.getElementById('im1');
  var img2 = document.getElementById('im2');
  var img3 = document.getElementById('im3');

  button1.onclick = function(){
    scrollTo(img1.offsetLeft, img1.offsetTop); //
  }

  button2.onclick = function(){
    scrollTo(img2.offsetLeft, img2.offsetTop); //
  }

  button3.onclick = function(){
    scrollTo(img3.offsetLeft, img3.offsetTop);
  }

  button4.onclick = function(){
    var num = Math.floor((Math.random() * 3) + 1);
    var img4 = document.getElementById('im'+ num);
    scrollTo(img4.offsetLeft, img4.offsetTop);
  }

}
