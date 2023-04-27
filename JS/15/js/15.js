const temaOscuro = () => {
  document.querySelector("body").setAttribute("data-bs-theme", "dark");
  document.querySelector("#cambiar").setAttribute("class", "bi bi-sun-fill");
}

const temaClaro = () => {
  document.querySelector("body").setAttribute("data-bs-theme", "light");
  document.querySelector("#cambiar").setAttribute("class", "btn btn-dark");
}

const cambiarTema = () => {
  document.querySelector("body").getAttribute("data-bs-theme") === "light"?
  temaOscuro() : temaClaro();
}

let arreglo = [
  "1.jpg",
  "2.jpg",
  "3.jpg"
]

function cambiarImagen(arreglo) {
  document.getElementById("imagenPredeterminada").src = "/JS/15/img/" + arreglo ;
}