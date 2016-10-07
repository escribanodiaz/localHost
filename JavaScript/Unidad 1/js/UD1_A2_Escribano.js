alert("Welcome in the score applications");

var score = 0;
score = prompt("Enter the score");
score = parseInt(score);
var contador=0;
var result=0;

 do{
   if(score <= 0 || score >= 100 && !isNaN(score)){
     score = prompt("Enter a number between 0-100")
   }
  else if(isNaN(score) || score == "" ){
    score = prompt("Try Again. Enter the score");
    score = parseInt(score);
  }
  else{
    result = result + score;
    contador +=1;
    score = prompt("Enter another the score");
    score = parseInt(score);
  }
}while (score != 999);

if(contador==0){
  alert("The average is = 0");
}
else {
  alert("The average is = " +result/contador);
}
