
function habilitar() {

    nombre_album = document.getElementById("nombre_album").value;
    fecha_album = document.getElementById("fecha_album").value;
    descripcion_album = document.getElementById("descripcion_album").value;
    id_genero = document.getElementById("id_genero").value;
    
    val = 0;


    if (nombre_album == "") {
        val++;
    }
    if (fecha_album == "") {
        val++;
    }
    if (descripcion_album == "") {
        val++;
    }
    if (id_genero == "") {
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
document.getElementById("descripcion_album").addEventListener("keyup", habilitar);
document.getElementById("id_genero").addEventListener("change", habilitar);
document.getElementById("guardar").addEventListener("click", () => {
    console.log("Haz llenado todos los campos");
});
