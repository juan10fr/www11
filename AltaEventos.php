<?php
	require_once('marcosup.php');
	
?>
    <div class="section">
      <div class="container">
        <div class="row text-center">
		   <div class="text-center mx-auto col-10">
			<h1 class="text-center text-primary">Formulario Alta de datos de "Eventos"</h1>
		   </div>		
		</div>	
		<div class="row text-center">	
			<div class="text-left mx-auto col-10">
				<form method="POST" action="Alta_VisorEventos.php">
					<!-- Dato 1-->
					ID_Evento:<br>
					<input type="text" name="id_evento" size="5" value=""><br>
					<!-- Dato 2-->
					Nombre:<br>
					<input type="text" name="nombre" size="20" value=""><br>
					<!-- Dato 3-->
					Fecha de inicio:<br>
					<input type="text" name="fecha_de_inicio" size="20" value=""><br>
					<!-- Dato 4-->
					Fecha de fin:<br>
					<input type="text" name="fecha_de_fin" size="20" value=""><br>
					<!-- Dato 5-->
					Direccion:<br>
					<input type="text" name="direccion" size="20" value=""><br>
				
					
					<!-- Botones del Formulario -->					
					<hr>
					<input type="submit" value="ENVIAR">
					- 
					<input type="reset" value="LIMPIAR">
				</form>
          </div>           
        </div> 
          <div class="row text-center">
		   <div class="col">
			<hr>	
		   </div>		
		</div>
      </div>
    </div>

<?php
	require_once('marcoinf.php');
?>	
