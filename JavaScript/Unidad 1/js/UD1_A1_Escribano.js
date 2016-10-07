
alert("Welcome to the Gasoline ");

  var kilometres = prompt("Enter the kilometres driven");
  var gasoline = prompt("The amount of litres you used");

while (kilometres == "") {
    kilometres = prompt("Blank space. Enter again the kilometers driven");
  }

  while (gasoline == "") {
    gasoline = prompt("Blank space. Enter again the amount of litres you used");
  }

  while(isNaN(kilometres) || kilometres <= 0){
    kilometres = prompt("Enter again the kilometers driven");
  }


  while(isNaN(gasoline) || gasoline <= 0){
    gasoline = prompt("Enter again the amount of litres you used");
  }

  var result = gasoline/kilometres;
  alert(result + " km/L");
