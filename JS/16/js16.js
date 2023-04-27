// en la tienda don lucho ofrece a los clientes que compran harina una serie de descuentos, para la marca Haz de oros($10000) otorga el 5% de descuento, para la marca diana($2800) otorga el 4% de descuento, para la marca pan pan($5190) otorga el 2% de descuento. Don luchó le solicita que se pueda identificar el nombre del cliente, sus apellidos y un número de contacto y los descuentos aplicados.



let nombre = prompt("Nombre y apellidos: ");
let telefono = prompt("Numero de telefono: ");
let producto = prompt("Nombre del producto: 1 = Haz de oros 2 = Diana 3 = Pan Pan");
let cantidad = parseInt(prompt("Cantidad:  "));
let valor = parseInt(prompt("Valor o ($):"));

let valor1=(valor*cantidad);

if (producto == 1 ) {
    let pagar = valor1 - ((cantidad*valor)*0.05);
    alert("El valor a pagar con el descuento del 5% para Haz de oro es: " + pagar);
} else if(producto == 2){
    let pagar = valor1 - ((cantidad*valor)*0.04);
    alert("El valor a pagar con el descuento del 4% para Diana es: " + pagar);
}else if(producto == 3){
    let pagar = valor1 - ((cantidad*valor)*0.02);
    alert("El valor a pagar con el descuento del 2% para Pan Pan es: " + pagar);
}else{
    alert("La opcion no existe");
}



