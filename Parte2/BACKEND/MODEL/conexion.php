<?php
    class conectar{
        
        function conexion($nombre,$apellido,$email,$tipoTarjeta,$titular,$numeroTarjeta,$CVV2, $fechaExpedicion,$direccion,$ciudad,$telefono,$departamento,$ZIP,$pais){
           
            try{
                $base=new PDO('mysql:host=localhost; dbname=programacionweb','root','');
                $base->exec('SET CHARACTER SET UTF8');
                $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql ='insert into crud (Nombre, Apellido, Email, TipoTarjeta,Titular,NumeroTarjeta,CVV2,
                FechaExpedicion, Direccion, Ciudad, Telefono, Departamento, ZIP, Pais) values(:nombre,:apellido,:email,:tipoTarjeta,:titular,:numeroTarjeta,:CVV2, :fechaExpedicion,:direccion,:ciudad,:telefono,:departamento,:ZIP,:pais)';
                $resultado=$base->prepare($sql);
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
            
                // use exec() because no results are returned
                $conn->exec($sql);
                echo "Record deleted successfully";
                }
            catch(PDOException $e)
                {
                echo $sql . "<br>" . $e->getMessage();
                }
        }
        
        
    }