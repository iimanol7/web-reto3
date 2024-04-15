<?php
         // Obtener el nodo de la temporada seleccionada
         $temporadaSeleccionada = $temporadasQuery->item($temporadaSeleccionadaIndex);
         // Mostrar los datos de la temporada seleccionada
         $temporadaNombre = $temporadaSeleccionada->getAttribute('nombre');
         $temporada = $xpath->query('/datos/temporada[@nombre="' . $temporadaNombre . '"]');
         $numNodos = $temporada->length;
         if($numNodos > 0) {
     
             echo "<h2>Datos de la temporada $temporadaNombre a:</h2>";
     
           // Crear un nuevo documento XML
           $nuevoXML = new DOMDocument('1.0', 'UTF-8');
           $nuevoXML->formatOutput = true;
     
           //por cada temporada encontrada(solo va a haber una)
           foreach($temporada as $temp){
            //importo el contenido
             $nuevaTemporada = $nuevoXML->importNode($temp, true);
             $nuevoXML->appendChild($nuevaTemporada);
           }
        }
?>