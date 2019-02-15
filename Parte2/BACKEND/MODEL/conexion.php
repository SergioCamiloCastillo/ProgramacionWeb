<?php
    class conectar{
        //Llegan los parametros enviados de la clase cIndex.php
        function conexion($nombre,$apellido,$email,$tipoTarjeta,$titular,$numeroTarjeta,$CVV2, $fechaExpedicion,$direccion,$ciudad,$telefono,$departamento,$ZIP,$pais){
           
            try{
                $base=new PDO('mysql:host=localhost; dbname=programacionweb','root','');
                $base->exec('SET CHARACTER SET UTF8');//Establecemos la conexion a la BD, teniendo en cuenta el nombre y la tabla en donde de alojaran los datos.
                $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql ='insert into crud (Nombre, Apellido, Email, TipoTarjeta,Titular,NumeroTarjeta,CVV2,
                FechaExpedicion, Direccion, Ciudad, Telefono, Departamento, ZIP, Pais) values(:nombre,:apellido,:email,:tipoTarjeta,:titular,:numeroTarjeta,:CVV2, :fechaExpedicion,:direccion,:ciudad,:telefono,:departamento,:ZIP,:pais)';
                $resultado=$base->prepare($sql);//Añadiran los datos que lleguen
                $resultado->execute(array(':nombre'=>$nombre,':apellido'=>$apellido,':email'=>$email,':tipoTarjeta'=>$tipoTarjeta,
                ':titular'=>$titular,':numeroTarjeta'=>$numeroTarjeta,':CVV2'=>$CVV2,':fechaExpedicion'=>$fechaExpedicion,
                ':direccion'=>$direccion,':ciudad'=>$ciudad,':telefono'=>$telefono,':departamento'=>$departamento,':ZIP'=>$ZIP,':pais'=>$pais));
                if(!empty($resultado))
                    {
                    echo 'Data Inserted';
                    }
            }catch(Exception $e){
                echo 'Error: '.$e->Getmessage();
            }
        }
        function eliminar($idEliminar){
            try {
                $conn = new PDO("mysql:host=localhost;dbname=programacionweb", 'root', '');
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
                // sql to delete a record
                $sql = "DELETE FROM crud WHERE id=$idEliminar";
                
            
                $conn->exec($sql);
                echo "Record deleted successfully";
                }
            catch(PDOException $e)
                {
                echo $sql . "<br>" . $e->getMessage();
                }
        }
        function editar($editarID,$editarNombre,$editarApellido,$editarEmail,$editarTipoTarjeta,$editarTitular,$editarNumeroTarjeta, $editarCVV2,$editarFechaExpedicion,$editarDireccion,$editarCiudad,$editarDepartamento,$editarZIP,$editarPais,$editarTelefono){
            try {
                $conn = new PDO("mysql:host=localhost;dbname=programacionweb", 'root', '');
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
                $sql = "UPDATE crud SET Nombre='$editarNombre', Apellido='$editarApellido', Email='$editarEmail', TipoTarjeta='$editarTipoTarjeta',
                Titular='$editarTitular', NumeroTarjeta='$editarNumeroTarjeta', CVV2='$editarCVV2', FechaExpedicion='$editarFechaExpedicion', Direccion='$editarDireccion', Ciudad='$editarCiudad', Telefono='$editarTelefono', Departamento='$editarDepartamento', ZIP='$editarZIP', Pais='$editarPais' WHERE ID='$editarID'";
            
                // Prepare statement
                $stmt = $conn->prepare($sql);
            
                // execute the query
                $stmt->execute();
            
                // echo a message to say the UPDATE succeeded
                echo $stmt->rowCount() . " Actualizado con exito";
                }
            catch(PDOException $e)
                {
                echo $sql . "<br>" . $e->getMessage();
                console.log('sin exito');
                }
        }
        
        
    }