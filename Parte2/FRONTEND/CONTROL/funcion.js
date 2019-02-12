document.getElementById('boton').addEventListener('click', enviar);
document.getElementById('botonEliminar').addEventListener('click', eliminar);
document.getElementById('seleccionar').addEventListener('click', seleccionar);

function enviar() {
    var nombre = document.getElementById('txtPrimerNombre').value;
    var apellido = document.getElementById('txtPrimerApellido').value;
    var email = document.getElementById('txtEmail').value;
    var tipoTarjeta = document.getElementById('txtTipoTarjeta').value;
    var titular = document.getElementById('txtTitular').value;
    var numeroTarjeta = document.getElementById('txtNumTarjeta').value;
    var CVV2 = document.getElementById('txtCVV2').value;
    var fechaExpedicion = document.getElementById('date').value;
    var direccion = document.getElementById('txtDireccion').value;
    var ciudad = document.getElementById('txtCiudad').value;
    var departamento = document.getElementById('txtDepartamento').value;
    var ZIP = document.getElementById('txtZIP').value;
    var pais = document.getElementById('txtPais').value;
    var telefono = document.getElementById('txtTelefono').value;

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "../../BACKEND/CONTROL/cIndex.php?nombre=" + nombre + "&apellido=" + apellido + "&email=" + email + "&tipoTarjeta=" + tipoTarjeta +
        "&titular=" + titular + "&numeroTarjeta=" + numeroTarjeta + "&CVV2=" + CVV2 + "&fechaExpedicion=" + fechaExpedicion + "&direccion=" + direccion +
        "&ciudad=" + ciudad + "&departamento=" + departamento + "&ZIP=" + ZIP + "&pais=" + pais + "&telefono=" + telefono, true);
    xhttp.send();

}
function eliminar(){
    var idEliminar=document.getElementById('txtEliminarID').value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "../../BACKEND/CONTROL/cIndex.php?idEliminar="+idEliminar, true);
    xhttp.send();
}
function seleccionar(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "../../BACKEND/MODEL/verDatos.php", true);
    xhttp.send();
}
