function habilitar() {


    password = document.getElementById("password").value;
    email = document.getElementById("email").value;
    phone_usu = document.getElementById("phone_usu").value;
    date_usu = document.getElementById("date_usu").value;
    lastname_usu = document.getElementById("lastname_usu").value;
    name = document.getElementById("name").value;
    val = 0;


    if (password == "") {
        val++;
    }
    if (email == "") {
        val++;
    }
    if (phone_usu == "") {
        val++;
    }
    if (lastname_usu == "") {
        val++;
    }
    if (name == "") {
        val++;
    }
    if (val == 0) {
        document.getElementById("modificar").disabled = false;

    } else {
        document.getElementById("modificar").disabled = true;
    }
}
document.getElementById("name").addEventListener("keyup", habilitar);
document.getElementById("lastname_usu").addEventListener("keyup", habilitar);
document.getElementById("phone_usu").addEventListener("keyup", habilitar);
document.getElementById("email").addEventListener("keyup", habilitar);
document.getElementById("password").addEventListener("keyup", habilitar);
document.getElementById("modificar").addEventListener("click", () => {
    console.log("Haz llenado todos los campos");
});
