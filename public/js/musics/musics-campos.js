
function habilitar() {

    nombre_music = document.getElementById("nombre_music").value;
    duracion_music = document.getElementById("duracion_music").value;
    discografica_music = document.getElementById("discografica_music").value;
   
    val = 0;

    if (nombre_music == "") {
        val++;
    }
    if (duracion_music == "") {
        val++;
    }
    if (discografica_music == "") {
        val++;
    }
  
    if (val == 0) {
        document.getElementById("guardar").disabled = false;

    } else {
        document.getElementById("guardar").disabled = true;
    }
}
document.getElementById("nombre_music").addEventListener("keyup", habilitar);
document.getElementById("duracion_music").addEventListener("keyup", habilitar);
document.getElementById("discografica_music").addEventListener("keyup", habilitar);

document.getElementById("guardar").addEventListener("click", () => {
    console.log("Haz llenado todos los campos");
});
