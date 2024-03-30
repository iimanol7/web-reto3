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

    // Obtener el nodo de la temporada seleccionada
    $temporadaSeleccionada = $temporadasQuery->item($temporadaSeleccionadaIndex);

    // Mostrar los datos de la temporada seleccionada
    $temporadaNombre = $temporadaSeleccionada->getAttribute('nombre');
    echo "<h2>Datos de la temporada $temporadaNombre:</h2>";

    // Aquí puedes agregar la lógica para mostrar los datos que desees de la temporada seleccionada
    // Por ejemplo, podrías consultar y mostrar los equipos y las jornadas de esa temporada.
    }else{
     // Obtener el nodo de la última temporada
    $ultimaTemporada = $temporadasQuery->item($indiceUltimaTemporada);

    // Mostrar los datos de la última temporada
    $ultimaTemporadaNombre = $ultimaTemporada->getAttribute('nombre');
    echo "<h2>Datos de la temporada $ultimaTemporadaNombre):</h2>";
    }


    include 'php/includes/footer.php';
    ?>

</body>
</html>
