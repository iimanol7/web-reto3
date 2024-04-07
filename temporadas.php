<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temporadas</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/cargar_temporada.js" defer></script>
</head>
<body>
    
    <?php
    include('php/includes/header.php');
    // Cargar el archivo XML
    $xml = new DOMDocument();
    $xml->load('datos.xml');

    // Crear un objeto XPath
    $xpath = new DOMXPath($xml);

    // Consulta para obtener la cantidad de temporadas y sus nombres
    $temporadasQuery = $xpath->query('/datos/temporada');
    $numTemporadas = $temporadasQuery->length;

   // Índice de la última temporada
    $indiceUltimaTemporada = $numTemporadas - 1;

// Crear el formulario con el menú desplegable de temporadas
echo "<form action='' method='post' id='form-temp'>";
echo "<label for='temporada'>Seleccione una temporada:</label>";
echo "<select name='temporada' id='temporada'>";
for ($i = 0; $i < $numTemporadas; $i++) {
    $temporadaNombre = $temporadasQuery->item($i)->getAttribute('nombre');
    $selected = ($i == $indiceUltimaTemporada) ? 'selected' : '';
    echo "<option value='$i' $selected>$temporadaNombre</option>";
}
echo "</select>";
echo "</form>";

// Si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el índice de la temporada seleccionada
    $temporadaSeleccionadaIndex = $_POST["temporada"];

    // Verificar si la selección es válida
    if ($temporadaSeleccionadaIndex < 0 || $temporadaSeleccionadaIndex >= $numTemporadas) {
        echo "Selección inválida.\n";
        exit;
    }
        //genero el XML con los datos de esa temporada
        include ('php/generar_temporada.php');
        
        $nuevoXML->save('nuevo_datos.xml');
    
        /*
        // Aplicar la transformación XSLT al nuevo XML
        $xsl = new DOMDocument();
        $xsl->load('transformacion.xsl');
    
        $processor = new XSLTProcessor();
        $processor->importStylesheet($xsl);
    
        // Imprimir la salida de la transformación
        echo $processor->transformToXml($nuevoXML);  
        */

    

    }else{
    //selecciono a mano la última temporada
    $temporadaSeleccionadaIndex = $numTemporadas - 1;
    
    //genero el XML con los datos de esa temporada
    include ('php/generar_temporada.php');

      
      $nuevoXML->save('nuevo_datos.xml');
    }


    include 'php/includes/footer.php';
    ?>

</body>
</html>
