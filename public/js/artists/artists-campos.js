function habilitar() {


    nombre_artis = document.getElementById("nombre_artis").value;
    apellido_artis = document.getElementById("apellido_artis").value;
    fecha_artis = document.getElementById("fecha_artis").value;
    telefono_artis = document.getElementById("telefono_artis").value;
    disquera_artis = document.getElementById("disquera_artis").value;
    descripcion_artis = document.getElementById("descripcion_artis").value;
    email_artis = document.getElementById("email_artis").value;
    email_verified = document.getElementById("email_verified").value;
    password_artis = document.getElementById("password_artis").value;
    
    val = 0;


    if (nombre_artis == "") {
        val++;
    }
    if (apellido_artis == "") {
        val++;
    }
    if (fecha_artis == "") {
        val++;
    }
    if (disquera_artis == "") {
        val++;
    }
    if (descripcion_artis == "") {
        val++;
    }
    if (email_artis == "") {
        val++;
    }
    if (email_verified == "") {
        val++;
    }
    if (password_artis == "") {
        val++;
    }

    if (val == 0) {
        document.getElementById("guardar").disabled = false;

    } else {
        document.getElementById("guardar").disabled = true;
    }
}
document.getElementById("nombre_artis").addEventListener("keyup", habilitar);
document.getElementById("apellido_artis").addEventListener("keyup", habilitar);
document.getElementById("fecha_artis").addEventListener("keyup", habilitar);
document.getElementById("telefono_artis").addEventListener("keyup", habilitar);
document.getElementById("disquera_artis").addEventListener("keyup", habilitar);
document.getElementById("descripcion_artis").addEventListener("keyup", habilitar);
document.getElementById("email_artis").addEventListener("keyup", habilitar);
document.getElementById("email_verified").addEventListener("keyup", habilitar);
document.getElementById("password_artis").addEventListener("keyup", habilitar);
document.getElementById("guardar").addEventListener("click", () => {
    console.log("Haz llenado todos los campos");
});
