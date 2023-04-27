
let horas = parseInt( prompt("escribe las horas del parqueadero: "));
let minutos = parseInt( prompt("escribe los minutos del parqueadero: "));

let valor = horas * 1500;
let valor2 = minutos * 1500;

// if (minutos >= 30) { 
//     let valor2 = valor + 1500;
//     alert ("el valor a pagar es:" + valor2);
// } 


// if (minutos >= 30) { 
//     let valor2 = valor + 1500;
//     alert ("el valor a pagar es:" + valor2);
// }else{
//     let valor2 = valor + (1500 / 60);
//     alert("el valor a pagar es: " + valor2);
// }



// if (minutos >= 30) { 
//     let valor2 = valor + 1500;
//     alert ("el valor a pagar es:" + valor2);
// }else{
//     let valor2 = valor + 1000;
//     alert("el valor a pagar es: " + valor2);
// }


document.write("el valor a pagar es: " + ( valor + valor2));