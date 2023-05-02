<?php        
// Recoge los datos a modificar
// Recoge todas las variables 
$id=$_POST['id'];    
$nick=$_POST['nick'];   
$clave=$_POST['clave']; 
$nombape=$_POST['nombape'];  
$nivel=$_POST['nivel']; 

// Invocamos el archivo con la conexión a la base de datos
require_once('gest/conexion.php');
$sentencia="UPDATE evento SET 
    nombre='$nick', 
    fecha_de_inicio='$clave', 
    fecha_de_fin='$nombape', 
    direccion='$nivel'
        WHERE id_evento=$id";

if (mysqli_query($c,$sentencia))
              {
			   //si ejecuta correctamente la sentencia de borrado recarga la página de Gestión
              //header("Location: modificar-evento.php"); 
              echo '<a href="gestionevento.php" class="close">    
                             Volver...
                    </a>';
              }
?>	

