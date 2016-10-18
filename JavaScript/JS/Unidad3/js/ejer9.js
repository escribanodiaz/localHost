window.onload=function(){
  var x = document.getElementById('cordenadax');
  var y = document.getElementById('cordenaday');

  window.onmousemove=function(){
    x.innerHTML="X: " +event.clientX;
    y.innerHTML="Y: " +event.clientY;
  }
}
