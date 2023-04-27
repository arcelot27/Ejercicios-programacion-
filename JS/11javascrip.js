let nombre = prompt ("escriba su nombre y apellidos completos: ");
let n1 = parseFloat(prompt("escriba la primera nota"));
let n2 = parseFloat(prompt("escriba la segunda nota"));
let n3 = parseFloat(prompt("escriba la tercera nota"));

if (n1 <=5.0 && n1 >= 0, n2 <=5.0 && n2 >= 0, n3 <=5.0 && n3 >= 0){
    let not1 = (n1 / 100) * 30;
    let not2 = (n2 / 100) * 30;
    let not3 = (n3 / 100) * 40;

    function suma( not1, not2, not3) { return not1 + not2 + not3;};
    document.write("hola" + nombre + " sus definitiva es: " + suma(not1,not2,not3));
}else{
    alert("las notas deben estar enter el 0 hasta el 5.0")
}





