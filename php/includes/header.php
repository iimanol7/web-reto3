<header>
        <a href="index.php" class="logo">
            <img src="img/logo-liga.png" alt="RFEBM" width="120px">
            <?php
            // Cargar el archivo XML
            $xml = new DOMDocument();
            $xml->load('datos.xml');
            $xpath = new DOMXPath($xml);    

            $temporadasQuery = $xpath->query('/datos/temporada');
            $numTemporadas = $temporadasQuery->length;
            $ultimaTemporada = $numTemporadas-1;
            $temporadaActual = $temporadasQuery->item($ultimaTemporada);
            $temporadaNombre = $temporadaActual->getAttribute('nombre');


            echo "<p class='actual'>Temporada $temporadaNombre</p>";
        ?>
        </a>
        <div class="titulo">
            <h1>REAL FEDERACION ESPAÑOLA DE BALONMANO</h1>
            <h1 class="secun">RFEBM</h1>
        </div>
        <div class="poligon"></div>

        <nav id="nav">
            <!-- botón de cerrar para el menú para móviles -->
            <img src="img/close-menu.png" class="close-menu" id="close-menu">
            <ul class="menu-horizontal">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="temporadas.php">Temporadas</a></li>
                <li><a href="noticias.php">Noticias</a></li>
            </ul>
        </nav>
        
        <!-- botón de apertura del menú para móviles -->
        <img src="img/open-menu.png" class="open-menu" id="open-menu">
      
    </header>
  