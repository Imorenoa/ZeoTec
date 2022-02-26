//Se ejecuta un evento al cargar la pagina para establecer eel estilo de display en none para cada uno de los menus
window.onload = function ()
{
    document.getElementById("formAltaUser").style.display = "none";
    document.getElementById("autUser").style.display = "none";
    document.getElementById("tablaUser").style.display = "none";
}

//Segun id pasado ejecucion del switch correspondiente
function selectorMenu (id){
    switch (id) {
        case "newUser":
            document.getElementById("formAltaUser").style.display = "";
            document.getElementById("autUser").style.display = "none";
            document.getElementById("tablaUser").style.display = "none";
            break;
        case "acceder":
            document.getElementById("formAltaUser").style.display = "none";
            document.getElementById("autUser").style.display = "";
            document.getElementById("tablaUser").style.display = "none";
            break;
        case "listaUser":
            document.getElementById("formAltaUser").style.display = "none";
            document.getElementById("autUser").style.display = "none";
            document.getElementById("tablaUser").style.display = "";
            break;
    }
}

//Captura de los eventos click para pasarlo como parametro a la funcion selectorMenu
document.querySelectorAll(".click").forEach(el => {
    el.addEventListener("click", e => {
        const id = e.target.getAttribute("id");
        selectorMenu(id);
    })
})