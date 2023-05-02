<?php
// Cargamos el marco superior de páginas
   require_once('marcosup.php');
   
echo "<center><h2>Generación de documentos PDF desde PHP.</h2>";

// --------------------------------------------
// Imprime la consulta en un fichero PDF
// --------------------------------------------
// Preparación del fichero PDF

# incluimos la clase fpdf que esté en este mismo directorio
include("gest/fpdf.php");

# y definimos la constante FPDF_FONTPATH como la ruta absoluta
# hasta el directorio que contiene las fuentes tipográficas
define('FPDF_FONTPATH','gest/fontspdf/');

 #------------- COMIENZA CON LA CREACIÓN DEL ARCHIVO PDF  -------------------
/* vamos a configurar el documento utilizando los milímetros
  como unidad de medida y unas dimensiones A4 (210*297).   */
# creamos un array con las dimensiones (ancho y alto);
/* Folio vertical */
	$dimensiones=array (210,297);
/* Folio apaisado */
	//$dimensiones=array (297,210);

# creamos  un nuevo objeto (MiPDF) utilizando la clase FPDF
# incluyendo en este caso los valores a utilizar por el constructor
	$MiPDF=new FPDF('P','mm',$dimensiones);
# el método SetAuthor nos permite incluir el nombre del autor
	$MiPDF->SetAuthor('ASIR. IES Turaniana');
# el método SetCreator nos permite incluir el nombre de la
# aplicacion que genera el pdf
	$MiPDF->SetCreator('Ejercicio de Impresión PDF. IES Turaniana');
# el método SetTitle nos permite incluir un título
	$MiPDF->SetTitle('Imprimir en PDF.');
# el método SetKeywords nos permite incluir palabras claves
# separadas por espacios y dentro de una misma cadena
	$MiPDF->SetKeywords('lista tabla base datos pdf turaniana practicas php');
# el método SetDisplayMode nos permite incluir palabras claves
# separadas por espacios y dentro de una misma cadena
	$MiPDF->SetDisplayMode('fullpage','single');

// Establece ajustes para el rallado. Fijamos los colores y espesores de linea
	$MiPDF->SetDrawColor(0,0,255);
	$MiPDF->SetFillColor(220,220,255);
	$MiPDF->SetLineWidth(0,5);

# creamos una NUEVA página PARA LISTAR LA CONSULTA
	$MiPDF->Addpage('');

// Dibujamos un cuadro azul señalando márgenes de 10mm de los bordes
	$MiPDF->SetDrawColor(0,0,255); // color azul de la línea
	$MiPDF->Rect(10,10,190,275); // dibuja el rectángulo

// Dibuja línea verde diagonal desde el punto (1,1) al punto (209,289)
	$MiPDF->SetDrawColor(0,255,0); // color verde de la línea
	$MiPDF->Line(10,10,200,285);     // Dibuja una línea

// Dibuja línea ROJA horizontal dividiendo la página en dos
	$MiPDF->SetDrawColor(255,0,0); // color verde de la línea
	$MiPDF->Line(0,148,210,148);     // Dibuja una línea

// Prueba de dibujo de rectángulos con los valores ajustados al principio
	$MiPDF->Rect(10,50,40,40);
	$MiPDF->Rect(60,50,40,40,'D');
	$MiPDF->Rect(110,50,40,40,'F');
	$MiPDF->Rect(160,50,40,40,'FD');

// Marcamos los límites de la hoja con letra X-Y-Z-H
	//Establece la fuente para el TEXTO
	$MiPDF->SetFont('Arial','',2); //<-- Tipo de letra arial, tamaño 2

	// Numeramos cada columna del documento para saber donde escribir.
	for ($i = 1; $i <= 195; $i++)
	{
		$MiPDF->SetXY($i,1);
		$MiPDF->write(8,$i);		
	}
	// Numeramos cada fila del documento para saber donde escribir.
	for ($i = 1; $i <= 268; $i++)
	{
		$MiPDF->SetXY(1,$i);
		$MiPDF->write(8,$i);		
	}

# creamos una NUEVA página PARA LISTAR LA CONSULTA
	$MiPDF->Addpage('');
	
//Establece la fuente para el TEXTO
	$MiPDF->SetFont('Arial','',10); //<-- Tipo de letra arial, tamaño 10
	
	// X-Esquina superior izquierda Posición (0,0)
	$MiPDF->SetXY(1,1);
	$MiPDF->write(8,"X (1,1)");
		
	// Z-Esquina inferior izquierda Posición (0,297)
	$MiPDF->SetXY(1,265);
	$MiPDF->write(8,"Z (1, 265)");
	
	// Y-Esquina superior derecha Posición (210,0)
	$MiPDF->SetXY(180,1);
	$MiPDF->write(8,"Y (180,1)");

	// H-Esquina inferior derecha Posición (210,297)
	$MiPDF->SetXY(178,265);
	$MiPDF->write(8,"H (178,265)");	
	
//Establece la fuente para el TEXTO
	$MiPDF->SetFont('Arial','',16); //<-- Tipo de letra arial, tamaño 16	
	
	// TÍTULO ENCABEZADO EN EL CENTRO DE LA PÁGINA (50,20)
	$MiPDF->SetXY(50,20);
	$MiPDF->write(8,"Título CENTRADO en la posición (50,20)");
	
	// TÍTULO ENCABEZADO EN EL CENTRO DE LA PÁGINA (50,100)
	$MiPDF->SetXY(50,100);
	$MiPDF->write(8,"Título CENTRADO en la posición (50,100)");

	// TÍTULO ENCABEZADO DE LA PÁGINA (10,170)
	$MiPDF->SetXY(10,170);
	$MiPDF->write(8,"Título en la posición (10,170)");
	
	// TÍTULO ENCABEZADO DE LA PÁGINA (100,200)
	$MiPDF->SetXY(100,200);
	$MiPDF->write(8,"Título en la posición (100,200)");

// ----------------------------------------------------------

# cerramos el documento PDF
$MiPDF->Output('PDFPrueba.pdf','F');

// Prepara el enlace para ver el PDF generado
    echo "<center>Se ha generado el archivo. Para verlo pulse aquí... ";
    echo "<a href='PDFPrueba.pdf' target='blanck'>PDFPrueba.pdf</a></center>";

// Cargamos el marco inferior de páginas
   require_once('marcoinf.php');    
?>

