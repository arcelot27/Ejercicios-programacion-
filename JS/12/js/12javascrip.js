
let divs = document.querySelectorAll(".imgs>div")

divs.forEach(e =>{
    e.addEventListener("click", () => {
        divs.forEach(d => {
            d.style.removeProperty("width")
        })

        e.style.width = "100%";
    })
})