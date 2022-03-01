//Captura de los eventos click para pasarlo como parametro a la funcion selectorMenu
document.querySelectorAll(".click").forEach(el => {
    el.addEventListener("click", e => {
        const id = e.target.getAttribute("id");
        selectorMenu(id);
        console.log(id);
    })
})

//Segun id pasado ejecucion del switch correspondiente
function selectorMenu(id) {
    switch (id) {
        case "newUser":
            //Muestra menu al pulsar Registrar usuario
            document.getElementById("formAltaUser").style.display = "";
            document.getElementById("autUser").style.display = "none";
            document.getElementById("tablaUser").style.display = "none";

            //Añade el estilo background para mostrar el meenu en el que nos encontramos
            document.getElementById("newUser").style.backgroundColor = "#015467";
            document.getElementById("acceder").style.backgroundColor = "";
            document.getElementById("listaUser").style.backgroundColor = "";
            break;
        case "acceder":
            document.getElementById("formAltaUser").style.display = "none";
            document.getElementById("autUser").style.display = "";
            document.getElementById("tablaUser").style.display = "none";

            document.getElementById("newUser").style.backgroundColor = "";
            document.getElementById("acceder").style.backgroundColor = "#015467";
            document.getElementById("listaUser").style.backgroundColor = "";
            break;
        case "listaUser":
            document.getElementById("formAltaUser").style.display = "none";
            document.getElementById("autUser").style.display = "none";
            document.getElementById("tablaUser").style.display = "";

            document.getElementById("newUser").style.backgroundColor = "";
            document.getElementById("acceder").style.backgroundColor = "";
            document.getElementById("listaUser").style.backgroundColor = "#015467";
            break;
        default:
            document.getElementById("formAltaUser").style.display = "none";
            document.getElementById("autUser").style.display = "none";
            document.getElementById("tablaUser").style.display = "none";
    }
}
