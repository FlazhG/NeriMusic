
function habilitar() {


    nombre_album = document.getElementById("nombre_album").value;
    fecha_album = document.getElementById("fecha_album").value;
    val = 0;


    if (nombre_album == "") {
        val++;
    }
    if (fecha_album == "") {
        val++;
    }
    
    if (val == 0) {
        document.getElementById("guardar").disabled = false;

    } else {
        document.getElementById("guardar").disabled = true;
    }
}
document.getElementById("nombre_album").addEventListener("keyup", habilitar);
document.getElementById("fecha_album").addEventListener("keyup", habilitar);
document.getElementById("guardar").addEventListener("click", () => {
    console.log("Haz llenado todos los campos");
});
