<?php
	require_once('marcosup.php');
?>
    <div class="section">
      <div class="container">
        <div class="row text-center">
		   <div class="text-center mx-auto col-10">
			<h1 class="text-center text-primary">Visor Alta de datos de "Clientes"</h1>
		   </div>		
		</div>	
		<div class="row text-center">	
		  <div class="text-center mx-auto col-10">
<?php			
		 // Todas las variables que ha enviado el Formulario
		$id_cliente=$_POST['id_cliente'];    	// Variable que recoge el...
		$nombre=$_POST['nombre'];    	// Variable que recoge el...	
		$apellido=$_POST['apellido'];    	// Variable que recoge el...	
		$direccion=$_POST['direccion']; 		// Variable que recoge el...
		$telefono=$_POST['telefono'];      	// Variable que recoge el...
        $email=$_POST['email'];      	// Variable que recoge el...

		// Muestra los datos recogidos durante la fase de desarrollo. 
		// Luego se ocultan o comentan estas líneas
		echo "<hr>Para comprobar muestra los datos recogidos: ";
		echo '<table class="table table-bordered table-hover table-condensed table-responsive">';
		echo "<tr><td>ID Cliente: </td><td><b>$id_cliente</b></td></tr>";
		echo "<tr><td>Nombre: </td><td><b>",$nombre,"</b></td></tr>";
		echo "<tr><td>Apellido: </td><td><b>",$apellido,"</b></td></tr>";
		echo "<tr><td>Direccion: </td><td><b>",$direccion,"</b></td></tr>";
		echo "<tr><td>telefono: </td><td><b>",$telefono,"</b></td></tr>";
        echo "<tr><td>email: </td><td><b>",$email,"</b></td></tr>";
		echo "</table>";
   
		// Indica la tabla sobre la que va a realizar la operación de alta
		$tabla="cliente"; // Entre comillas indicamos el nombre de la tabla
		
		// Construye la sentencia de inserción de los datos
		$sentencia="INSERT INTO $tabla (id_cliente, nombre, apellido, direccion, telefono, email) VALUES ('$id_cliente','$nombre','$apellido','$direccion','$telefono','$email');";
		// Muestra la sentencia que va a ejecutar por si aparecen errores. Luego se puede ocultar esta línea.
		echo "<br>Sentencia:<br><font color='green'>". $sentencia."</font>";

		// A continuación ejecuta la sentencia
		 if (mysqli_query($c,$sentencia)) {			 
			 echo "<h2>Confirmada Alta como del registro: ".$id_cliente." - ".$nombre." - ".$apellido." - ".$direccion." - ".$telefono." - ".$email."</h2>";
		 }
		 else {
			 echo "<br><h2>No insertado. Compruebe errores en los datos de entrada.</h2>";
		 }	
?>
          </div>           
        </div> 
		<div class="row text-center">
		  <div class="col">
			<hr>	
		  </div>		
		</div>
      </div>