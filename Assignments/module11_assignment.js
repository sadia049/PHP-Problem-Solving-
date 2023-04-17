function multiplicationTable(number) {

  for (let i = 1; i <= 10; i++) {
    let product = i * number;
    console.log("Num " + i + " iteration= " + product);

  }

}
let number = prompt("Enter an Integer Number\n");
number = Number(number);



if ((Number.isInteger(number)) == true) {
  multiplicationTable(Number.parseInt(number));

}
else
  console.log("Give an integer number");


