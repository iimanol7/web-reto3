
<head>
    <link rel="stylesheet" href="../../css/style.css">
    <script src="../../js/script.js" defer></script>
</head>
<?php
    session_start();

    //si todavia no se ha creado
    if(!isset($_SESSION['posicion'])){
        $_SESSION['posicion'] = 0;
    }

    $posicion =  $_SESSION['posicion'];

    #cargo el fichero xml
    $xml = new DOMDocument;
    $xml->load('../usuarios.xml');
    
    #creo una nueva variable para usar con xpath
    $xpath = new DOMXPath($xml);
    #register the php: namespace (required)
    $xpath->registerNamespace("php", "http://php.net/xpath");
    #Register PHP functions (no restrictions)
    $xpath->registerPHPFunctions();
    #consulta xpath

    #Saco todos los usuarios
    $usuario = $xpath->query('/usuarios/usuario');
    //saco cuanto es el total
    $_SESSION['total'] = $usuario->length;
    $totalUsuarios =  $_SESSION['total'];

    //selecciono el usuario especificio según la posición
    $usuarioSeleccionado = $usuario->item($posicion);

    #compruebo que un usuario en esa posicion exista
    if($usuarioSeleccionado == null) {
        echo "<h1>NO EXISTE NINGÚN USUARIO</h1>";
        die();
    
    }else{
        //si lo encuentra
        
        $nombre = $usuarioSeleccionado->getElementsByTagName("nombre")->item(0)->nodeValue;
        $apellidos = $usuarioSeleccionado->getElementsByTagName("apellidos")->item(0)->nodeValue;
        $correo = $usuarioSeleccionado->getElementsByTagName("correo")->item(0)->nodeValue;
        $rol = $usuarioSeleccionado->getElementsByTagName("rol")->item(0)->nodeValue;
        $pass = $usuarioSeleccionado->getElementsByTagName("contraseña")->item(0)->nodeValue;
    
        echo "<form class='navegacion' id='navegacion'>";
        echo "<h1>USUARIOS</h1>";
            echo "<input type='text' value='$nombre' readonly>";
            echo "<input type='text' value='$apellidos' readonly>";
            echo "<input type='text' value='$correo' readonly>";
            echo "<input type='text' value='$rol' readonly>";
            echo "<input type='text' value='$pass' readonly>";
        echo "</form>";
    ?>
        <div class="btn_navegacion">
            <a href="anterior.php">Anterior</a><a href="siguiente.php">Siguiente</a>
        </div>
        <div class="btn_editar">
            <a href="#" id="editar">Editar</a> <a href="#" id="aplicar">Aplicar</a>
        </div>
        
    <?php

      
    }
    ?>


<!--
     http://localhost/web-reto3/php/navegacion/navegacion.php# 
    -->