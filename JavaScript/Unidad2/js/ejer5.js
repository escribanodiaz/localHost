var link1 = document.getElementsByTagName('a');
console.log(link1.length);

var link2 = document.getElementsByTagName('a'); //7 porque es la ultima zona y el -2 es porque empuieza por el 0
console.log(link2[link2.length-2].href);

var link3 = document.getElementsByTagName('a');
var sumURL = 0;
for (var i = 0; i < link3.length; i++) {
  if(link3[i].href == "http://prueba" || link3[i].href =="http://prueba/"){
    sumURL ++;
  }
}
console.log(sumURL);

var link4 = document.getElementsByTagName('p');
var a1 = link4[2].getElementsByTagName('a');
console.log(a1.length);
