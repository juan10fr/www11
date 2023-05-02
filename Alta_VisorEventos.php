<?php
	require_once('marcosup.php');
?>
    <div class="section">
      <div class="container">
        <div class="row text-center">
		   <div class="text-center mx-auto col-10">
			<h1 class="text-center text-primary">Visor Alta de datos de "Eventos"</h1>
		   </div>		
		</div>	
		<div class="row text-center">	
		  <div class="text-center mx-auto col-10">
<?php			
		 // Todas las variables que ha enviado el Formulario
		$id_evento=$_POST['id_evento'];    	// Variable que recoge el...
		$nombre=$_POST['nombre'];    	// Variable que recoge el...	
		$fecha_de_inicio=$_POST['fecha_de_inicio'];    	// Variable que recoge el...	
		$fecha_de_fin=$_POST['fecha_de_fin']; 		// Variable que recoge el...
		$direccion=$_POST['direccion'];      	// Variable que recoge el...

		// Muestra los datos recogidos durante la fase de desarrollo. 
		// Luego se ocultan o comentan estas líneas
		echo "<hr>Para comprobar muestra los datos recogidos: ";
		echo '<table class="table table-bordered table-hover table-condensed table-responsive">';
		echo "<tr><td>ID Evento: </td><td><b>$id_evento</b></td></tr>";
		echo "<tr><td>Nombre: </td><td><b>",$nombre,"</b></td></tr>";
		echo "<tr><td>Fecha de inicio: </td><td><b>",$fecha_de_inicio,"</b></td></tr>";
		echo "<tr><td>Fecha de fin: </td><td><b>",$fecha_de_fin,"</b></td></tr>";
		echo "<tr><td>Direccion: </td><td><b>",$direccion,"</b></td></tr>";
		echo "</table>";
   
		// Indica la tabla sobre la que va a realizar la operación de alta
		$tabla="evento"; // Entre comillas indicamos el nombre de la tabla
		
		// Construye la sentencia de inserción de los datos
		$sentencia="INSERT INTO $tabla (id_evento, nombre, fecha_de_inicio, fecha_de_fin, direccion) VALUES ('$id_evento','$nombre','$fecha_de_inicio','$fecha_de_fin','$direccion');";
		// Muestra la sentencia que va a ejecutar por si aparecen errores. Luego se puede ocultar esta línea.
		echo "<br>Sentencia:<br><font color='green'>". $sentencia."</font>";

		// A continuación ejecuta la sentencia
		 if (mysqli_query($c,$sentencia)) {			 
			 echo "<h2>Confirmada Alta como del registro: ".$id_evento." - ".$nombre." - ".$fecha_de_inicio." - ".$fecha_de_fin." - ".$direccion."</h2>";
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