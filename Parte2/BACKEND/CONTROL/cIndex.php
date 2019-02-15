<?php
require('../MODEL/conexion.php');
if(isset($_GET['nombre']) && isset($_GET['apellido']) && isset($_GET['email']) && isset($_GET['tipoTarjeta']) && isset($_GET['titular'])
&& isset($_GET['numeroTarjeta']) && isset($_GET['CVV2']) && isset($_GET['fechaExpedicion']) && isset($_GET['direccion']) && isset($_GET['ciudad'])
&& isset($_GET['telefono']) && isset($_GET['departamento']) && isset($_GET['ZIP']) && isset($_GET['pais'])){
    $con=new conectar();
    $con->conexion($_GET['nombre'],$_GET['apellido'],$_GET['email'],$_GET['tipoTarjeta'],$_GET['titular'],$_GET['numeroTarjeta'],$_GET['CVV2'],$_GET['fechaExpedicion'],
    $_GET['direccion'],$_GET['ciudad'],$_GET['telefono'],$_GET['departamento'],$_GET['ZIP'],$_GET['pais']);
     
}
else if(isset($_GET['idEliminar'])){
    $con=new conectar();
    $con->eliminar($_GET['idEliminar']);
}
else if(isset($_GET['editarID']) && isset($_GET['editarNombre']) && isset($_GET['editarApellido']) && isset($_GET['editarEmail']) && isset($_GET['editarTipoTarjeta'])
&& isset($_GET['editarTitular']) && isset($_GET['editarNumeroTarjeta']) && isset($_GET['editarCVV2']) && isset($_GET['editarFechaExpedicion']) && isset($_GET['editarDireccion'])
&& isset($_GET['editarCiudad']) && isset($_GET['editarDepartamento']) && isset($_GET['editarZIP']) && isset($_GET['editarPais']) && isset($_GET['editarTelefono'])){
   echo('ha llehado a editar');
    $conn=new conectar();
    $conn->editar($_GET['editarID'],$_GET['editarNombre'],$_GET['editarApellido'],$_GET['editarEmail'],$_GET['editarTipoTarjeta'],$_GET['editarTitular'],$_GET['editarNumeroTarjeta'],$_GET['editarCVV2'],
    $_GET['editarFechaExpedicion'],$_GET['editarDireccion'],$_GET['editarCiudad'],$_GET['editarDepartamento'],$_GET['editarZIP'],$_GET['editarPais'],$_GET['editarTelefono']);

}
