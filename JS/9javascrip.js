
let numero = prompt("escribe un numero: ");

// document.write(numero == 0 ? "el nuemro es 0" : "es diferente de 0");

switch(true){
    case numero == 0:
        document.write("el numero es 0");    
    break;
    case numero > 0:
        alert("el numero es mayor a 0");
    break;
    case numero < 0:
        document.write("menor a 0")
    break;
}



// if (numero == 0) {
//     alert("el numero es 0");
// } else {
//     if (numero > 0) {
//         alert("es mayor a 0");
//     }else{
//         alert ("es menor a 0");
//     }
// }

// if(numero == 0){alert("bruto se pedio escribir un numero diferente a 0")}
// if (numero > 0) {alert("es diferente de 0");} 
// if(numero < 0) {alert("es menor y diferente a 0")}
