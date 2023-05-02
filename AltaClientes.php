<?php
	require_once('marcosup.php');
	
?>
    <div class="section">
      <div class="container">
        <div class="row text-center">
		   <div class="text-center mx-auto col-10">
			<h1 class="text-center text-primary">Formulario Alta de datos de "Clientes"</h1>
		   </div>		
		</div>	
		<div class="row text-center">	
			<div class="text-left mx-auto col-10">
				<form method="POST" action="Alta_VisorClientes.php">
					<!-- Dato 1-->
					ID_Cliente:<br>
					<input type="text" name="id_cliente" size="5" value=""><br>
					<!-- Dato 2-->
					Nombre completo:<br>
					<input type="text" name="nombre" size="20" value=""><br>
					<!-- Dato 3-->
					Apellido:<br>
					<input type="text" name="apellido" size="20" value=""><br>
					<!-- Dato 4-->
					Direccion:<br>
					<input type="text" name="direccion" size="20" value=""><br>
					<!-- Dato 5-->
					Teléfono:<br>
					<input type="text" name="telefono" size="20" value=""><br>
					<!-- Dato 6-->
					Email:<br>
					<input type="text" name="email" size="20" value=""><br>
					
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
