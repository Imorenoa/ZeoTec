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
        default:
            document.getElementById("formAltaUser").style.display = "none";
            document.getElementById("autUser").style.display = "none";
            document.getElementById("tablaUser").style.display = "none";
    }
}

function validacionAltauser (){
    if (valor == null || valor.length === 0) {
        //    Validacion del campo Name
        alert('Debes introducir un nombre valido');
        return false;
    } else if (!(/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)/.test(valor))) {
        //    Validacion del campo email
        alert('Introduce una dirección de email valida');
        return false
    } else if (valor == null || valor.length === 0) {
        //    Validacion del campo contraseña
        alert('Introduce una contraseña valida');
    } else
        return true;
}