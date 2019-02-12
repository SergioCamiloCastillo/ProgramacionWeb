<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos.css">
    <title>SitioWeb</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

</head>

<body>
    <div id='demo'>
        <div class="container box">
            <h1 align="center">CRUD Programacion Web</h1>
            <br />
            <div class="table-responsive">
                <br />
                <div align="right">
                    <button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-info btn-lg">Add</button>
                    <button type="button" id="seleccionar" class="btn btn-warning btn-xs update" data-toggle="modal"
                        data-target="#seleccionar">Ver datos</button>

                    <button type="button" id="delete" class="btn btn-danger btn-xs delete" data-toggle="modal"
                        data-target="#eliminar">Delete</button>
                    <script src='../CONTROL/funcion.js'></script>

                </div>
                <br /><br />
                <table id="user_data" class="table table-bordered">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
 
                            <thead>
                            
                            <tr>
                            
                            <th>ID</th>
                            
                            <th>Nombre</th>
                            
                            <th>Apellido</th>
                            
                            <th>Email</th>
                            
                            <th>Tipo Tarjeta</th>
                            <th>Titular</th>
                            <th>Numero de tarjeta</th>
                            <th>CVV2</th>
                            <th>Fecha de expedicion</th>
                            <th>Direccion </th>
                            <th>Ciudad</th>
                            <th>Telefono</th>
                            <th>Departamento</th>
                            <th>ZIP</th>
                            <th>Pais</th>

                            
                            </tr>
                            
                            </thead>
                            
                            <tfoot>
                            
                            <tr>
                            
                            
                            </tr>
                            
                            </tfoot>
                            
                            <?php
                            
                            $servername = "localhost";
                            
                            $username = "root";
                            
                            $password = "";
                            
                            $dbname = "programacionweb";
                            
                            // Create connection
                            
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            
                            $sql = 'SELECT * from crud';
                            
                            if (mysqli_query($conn, $sql)) {

                            echo "";
                            
                            } else {
                            
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                            
                            }
                            
                            $count=1;
                            
                            $result = mysqli_query($conn, $sql);
                            
                            if (mysqli_num_rows($result) > 0) {
                            
                            // output data of each row
                            
                            while($row = mysqli_fetch_assoc($result)) { ?>
                            
                            <tbody>
                            
                            <tr>
                            
                            <th>
                            
                            <?php echo $row['ID']; ?>
                            
                            </th>
                            
                            <td>
                            
                            <?php echo $row['Nombre']; ?>
                            
                            </td>
                            
                            <td>
                            
                            <?php echo $row['Apellido']; ?>
                            
                            </td>
                            
                            <td>
                            
                            <?php echo $row['Email']; ?>
                            
                            </td>
                            
                            <td>
                            
                            <?php echo $row['TipoTarjeta']; ?>
                            
                            </td>
                            <td>
                            
                            <?php echo $row['NumeroTarjeta']; ?>
                            
                            </td>
                            <td>
                            
                            <?php echo $row['CVV2']; ?>
                            
                            </td>
                            <td>
                            
                            <?php echo $row['FechaExpedicion']; ?>
                            
                            </td>
                            <td>
                            
                            <?php echo $row['Direccion']; ?>
                            
                            </td>
                            <td>
                            
                            <?php echo $row['Ciudad']; ?>
                            
                            </td>
                            <td>
                            
                            <?php echo $row['Telefono']; ?>
                            
                            </td>
                            <td>
                            
                            <?php echo $row['Departamento']; ?>
                            
                            </td>
                            <td>
                            
                            <?php echo $row['ZIP']; ?>
                            
                            </td>
                            <td>
                            
                            <?php echo $row['Pais']; ?>
                            
                            </td>
                            </tr>
                            
                            </tbody>
                            
                            <?php
                            
                            $count++;
                            
                            }
                            
                            } else {
                            
                            echo '0 results';
                            
                            }
                            
                            ?>
                            
                        </table>
                    </table>

            </div>
        </div>
        <div id="userModal" class="modal fade">
            <div class="modal-dialog">
                <form method="post" id="user_form" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add User</h4>
                        </div>
                        <div class="modal-body">
                            <h3><strong>Informacion personal</strong></h3><br /><br />

                            <label>Primer nombre</label>
                            <input type="text" name="txtPrimerNombre" id="txtPrimerNombre" class="form-control"
                                required='' />
                            <br />
                            <label>Primer apellido</label>
                            <input type="text" name="txtPrimerApellido" id="txtPrimerApellido" class="form-control"
                                required='' />
                            <br />
                            <label>Email</label>
                            <input type="text" name="txtEmail" id="txtEmail" class="form-control" required='' />
                            <br />
                            <h3><strong> Informacion de tarjeta de credito</strong></h3><br /><br />
                            <div class="form-group">
                                <label for="exampleFormControlSelect1"> Tipo tarjeta Credito</label>
                                <select class="form-control" id="txtTipoTarjeta">
                                    <option>Visa</option>
                                    <option>Mastercard</option>
                                    <option>American Express</option>

                                </select>
                            </div>
                            <label>Titular de la tarjeta</label>
                            <input type="text" name="txtTitular" id="txtTitular" class="form-control" required='' />
                            <br />
                            <label>Numero de la tarjeta</label>
                            <input type="text" name="txtNumTarjeta" id="txtNumTarjeta" class="form-control" required='' />
                            <br />
                            <label>CVV2</label>
                            <input type="text" name="txtCVV2" id="txtCVV2" class="form-control" />
                            <br />
                            <label>Fecha de expedicion</label><br />
                            <input type="date" id='date' required=''><br />
                            <h3><strong>Direccion de envio</strong></h3>
                            <label>Direccion</label>
                            <input type="text" name="txtDireccion" id="txtDireccion" class="form-control" required='' />
                            <br />
                            <label>Ciudad</label>
                            <input type="text" name="txtCiudad" id="txtCiudad" class="form-control" required='' />
                            <br />
                            <label for="exampleFormControlSelect1"> Departamento</label>
                            <select class="form-control" id="txtDepartamento">
                                <option>Boyaca</option>
                                <option>Cundinamarca</option>
                                <option>Nariño</option>
                                <option>Santander</option>


                            </select>
                            <label>ZIP</label>
                            <input type="text" name="txtZIP" id="txtZIP" class="form-control" required='' />
                            <br />
                            <label for="exampleFormControlSelect1"> Pais</label>
                            <select class="form-control" id="txtPais">
                                <option>Colombia</option>
                                <option>Estados Unidos</option>
                                <option>Japon</option>
                                <option>Uruguay</option>


                            </select>
                            <label>Telefono</label>
                            <input type="text" name="txtTelefono" id="txtTelefono" class="form-control" required='' />
                            <br />
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" required=''>
                                <label class="form-check-label" for="defaultCheck1">
                                    Acepto Terminos y condiciones
                                </label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="user_id" id="user_id" />
                            <input type="hidden" name="operation" id="operation" />
                            <input type="submit" name="boton" id="boton" class="btn btn-success" value="Add" />
                            <script src='../CONTROL/funcion.js'></script>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div id="eliminar" class="modal fade">
            <div class="modal-dialog">
                <form method="post" id="user_form" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Delete</h4>
                        </div>
                        <div class="modal-body">
                            <h3><strong>Eliminar registro</strong></h3><br /><br />

                            <label>ID</label>
                            <input type="text" name="txtEliminarID" id="txtEliminarID" class="form-control" required='' />
                            <br />
                            <input type="submit" name="boton" id="botonEliminar" class="btn btn-success" value="Eliminar" />
                            <script src='../CONTROL/funcion.js'></script>
                        </div>

                    </div>
                </form>
            </div>
        </div>
        <div id="seleccionar" class="modal fade">
            <div class="modal-dialog">
                <form method="post" id="user_form" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Delete</h4>
                        </div>
                        <div class="modal-body">
                            <h3><strong>Ver registros</strong></h3><br /><br />


                            <input type="submit" name="boton" id="seleccionar" class="btn btn-success" value="Eliminar" />
                            <script src='../CONTROL/funcion.js'></script>
                        </div>

                    </div>
                </form>
            </div>
        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>

</html>