<?php
    // Obtener el nodo de la temporada seleccionada
    $temporadaSeleccionada = $temporadasQuery->item($temporadaSeleccionadaIndex);
    // Mostrar los datos de la temporada seleccionada
    $temporadaNombre = $temporadaSeleccionada->getAttribute('nombre');
    echo "<h2>Datos de la temporada $temporadaNombre:</h2>";

      // Crear un nuevo documento XML
      $nuevoXML = new DOMDocument('1.0', 'UTF-8');
      $nuevoXML->formatOutput = true;
  
      // Crear el elemento raíz para la nueva temporada
      $nuevaTemporada = $nuevoXML->createElement('temporada');
      $nuevaTemporada->setAttribute('nombre', $temporadaNombre);
      $nuevoXML->appendChild($nuevaTemporada);
  
      // Crear el elemento equipos
      $equipos = $nuevoXML->createElement('equipos');
      $nuevaTemporada->appendChild($equipos);
  
      // Copiar equipos y jugadores de la temporada seleccionada al nuevo XML
      $equiposQuery = $xpath->query('/datos/temporada[@nombre="' . $temporadaNombre . '"]/equipos/equipo');
      foreach ($equiposQuery as $equipo) {
          $nuevoEquipo = $nuevoXML->createElement('equipo');
          $nuevoEquipo->setAttribute('nombre', $equipo->getAttribute('nombre'));
          
          $jugadoresQuery = $xpath->query('jugador', $equipo);
          foreach ($jugadoresQuery as $jugador) {
              $nuevoJugador = $nuevoXML->createElement('jugador', $jugador->nodeValue);
              $nuevoEquipo->appendChild($nuevoJugador);
          }
          
          $equipos->appendChild($nuevoEquipo);
      }
  
      // Crear el elemento jornadas
      $jornadas = $nuevoXML->createElement('jornadas');
      $nuevaTemporada->appendChild($jornadas);
  
      // Copiar jornadas y partidos de la temporada seleccionada al nuevo XML
      $jornadasQuery = $xpath->query('/datos/temporada[@nombre="' . $temporadaNombre . '"]/jornadas/jornada');
      foreach ($jornadasQuery as $jornada) {
          $nuevaJornada = $nuevoXML->importNode($jornada, true);
          $jornadas->appendChild($nuevaJornada);
      }
?>