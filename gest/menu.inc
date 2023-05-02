<?php
################################################
#### Menú Principal #
#
#
function principal()
{
echo '
        <ul class="navbar-nav ml-auto text-light">
          <li class="nav-item text-white"> <a class="nav-link" href="index.php">Inicio</a> </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
				Tablas</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="cliente.php">Clientes</a>
              <a class="dropdown-item" href="evento.php">Evento</a>
              <a class="dropdown-item" href="material.php">Material</a>
		  <a class="dropdown-item" href="factura.php">Factura</a>
 		  <a class="dropdown-item" href="alquiler.php">Alquiler</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
				Vistas</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="eventos_material_view.php">Vista Eventos/Material</a>
              <a class="dropdown-item" href="vista_factura_cliente.php">Vista Cliente/Factura</a>
            </div>
          </li>

           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
				Altas</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="AltaClientes.php">Alta-Clientes</a>
              <a class="dropdown-item" href="AltaEventos.php">Alta-Eventos</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Gestion</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="gestionevento.php">Gestion Evento</a>
            </div>
          </li>


          <li class="nav-item"> <a class="nav-link" href="servicios.php"></a> </li>
          <li class="nav-item"> <a class="nav-link" href="contacto.php">Contacto</a> </li>
          <li class="nav-item"> <a class="nav-link" href="ayuda.php"></a> </li>
          <li class="nav-item"> <a class="nav-link" href="#"></a> </li>          
          <li class="nav-item"> <a class="nav-link" href="#">ENTRAR</a> </li>
        </ul>
          ';
		 
}
################################################
?>
