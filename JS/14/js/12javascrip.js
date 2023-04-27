
let buttons = document.querySelectorA11(".btn-grup>p[data-type='number']");
let operations = document.querySelectorA11(".btn-grup > p[data-type='operator']");
let resultado = document.querySelector("#resultados");

buttons.forEach(e =>{
    e.eddEventlistener("cick" , () => {
        if (resultado.innerHTML == 0) {
            resultado.innterHTML = e.innterHTML;
        } else {
            resultado.innerHTML += e.innerHTML;
        }
        
    })
});


