var bEnviar = document.getElementById('boton');//Aca se especifican los botones de añadir, eliminar y editar
var bEliminar = document.getElementById('botonEliminar').addEventListener('click',eliminar);
var bEditar = document.getElementById('botonEditar').addEventListener('click',editar);
if (bEnviar) {
    bEnviar.addEventListener('click', enviar);//cuando el id de añadir recibe un click, se dirige a la funcion enviar
  function enviar() {
        var nombre = document.getElementById('txtPrimerNombre').value;
        var apellido = document.getElementById('txtPrimerApellido').value;
        var email = document.getElementById('txtEmail').value;//Se crean las variables en javascript, de los ids de la pagina de html
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
            if (this.readyState == 4 && this.status == 200) {//enviar los datos a traves de ajax
                document.getElementById("demo").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "../../BACKEND/CONTROL/cIndex.php?nombre=" + nombre + "&apellido=" + apellido + "&email=" + email + "&tipoTarjeta=" + tipoTarjeta +
            "&titular=" + titular + "&numeroTarjeta=" + numeroTarjeta + "&CVV2=" + CVV2 + "&fechaExpedicion=" + fechaExpedicion + "&direccion=" + direccion +
            "&ciudad=" + ciudad + "&departamento=" + departamento + "&ZIP=" + ZIP + "&pais=" + pais + "&telefono=" + telefono, true);//Enviamos los datos por GET a una pagina php, que seria el backend para que los procese
        xhttp.send();

    }
} 
    
    function eliminar() {//cuando el id de eliminar recibe un click, se dirige a la funcion eliminar
        var idEliminar = document.getElementById('txtEliminarID').value;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {//enviar los datos a traves de ajax
                document.getElementById("demo").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "../../BACKEND/CONTROL/cIndex.php?idEliminar=" + idEliminar, true);
        xhttp.send();//Enviamos los datos por GET a una pagina php, que seria el backend para que los procese
    }

   
    function editar() {//cuando el id de añadir recibe un click, se dirige a la funcion editar
        var editarID = document.getElementById('txtEditarID').value;
        var editarNombre = document.getElementById('txtEditarPrimerNombre').value;
        var editarApellido = document.getElementById('txtEditarPrimerApellido').value;
        var editarEmail = document.getElementById('txtEditarEmail').value;
        var editarTipoTarjeta = document.getElementById('txtEditarTipoTarjeta').value;
        var editarTitular = document.getElementById('txtEditarTitular').value;
        var editarNumeroTarjeta = document.getElementById('txtEditarNumTarjeta').value;
        var editarCVV2 = document.getElementById('txtEditarCVV2').value;
        var editarFechaExpedicion = document.getElementById('Editardate').value;
        var editarDireccion = document.getElementById('txtEditarDireccion').value;
        var editarCiudad = document.getElementById('txtEditarCiudad').value;
        var editarDepartamento = document.getElementById('txtEditarDepartamento').value;
        var editarZIP = document.getElementById('txtEditarZIP').value;
        var editarPais = document.getElementById('txtEditarPais').value;
        var editarTelefono = document.getElementById('txtEditarTelefono').value;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {//enviar los datos a traves de ajax
                document.getElementById("demo").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "../../BACKEND/CONTROL/cIndex.php?editarID=" + editarID + "&editarNombre=" + editarNombre + "&editarApellido=" + editarApellido + "&editarEmail=" + editarEmail +
            "&editarTipoTarjeta=" + editarTipoTarjeta + "&editarTitular=" + editarTitular + "&editarNumeroTarjeta=" + editarNumeroTarjeta + "&editarCVV2=" + editarCVV2 + "&editarFechaExpedicion=" + editarFechaExpedicion +
            "&editarDireccion=" + editarDireccion + "&editarCiudad=" + editarCiudad + "&editarDepartamento=" + editarDepartamento + "&editarZIP=" + editarZIP + "&editarPais=" + editarPais+ "&editarTelefono=" + editarTelefono, true);
        xhttp.send();//Enviamos los datos por GET a una pagina php, que seria el backend para que los procese
    }
