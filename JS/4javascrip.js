let notas = [];
notas.push(parseInt(prompt("ingresa una nota")));
notas.push(parseInt(prompt("ingresa una nota")));
notas.push(parseInt(prompt("ingresa una nota")));

let sum = notas[0] + notas[1] + notas[2];
let res = sum / 3;

document.write(res);
