
<head>
    <link rel="stylesheet" href="../../css/style.css">
    <script src="../../js/script.js" defer></script>
</head>

<?php
    error_reporting(0);
    session_start();
    $sesion = $_SESSION['sesion'];

    //compruebo que el usuario sea admin
    if($sesion['rol'] !='administrador'){
        //le digo que no tiene permisos
        //header("Location: error.php");
        echo "<div style='display:flex; justify-content:center;flex-direction:column;'>";
        echo "<h1 style='text-align:center;'>NO TIENES PERMISOS</h1>";
        echo "<img src='../../img/jugador.jpg' style='margin:auto;'>";
        echo "</div>";
        //acabo la ejecución
        die();
    }
?>

<?php
   
    //si todavia no se ha creado
    if(!isset($_SESSION['posicion'])){
        $_SESSION['posicion'] = 0;
    }
    //guardamos el valor de la sesion en la variable "posicion"
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
    
    echo "<section class='container_usuarios'>";
        echo "<form class='navegacion' id='navegacion'>";
        echo "<h1>USUARIOS</h1>";   
            echo "<p>Nombre</p> ";
            echo "<input type='text' value='$nombre' readonly>";
            echo "<p>Correo</p> ";
            echo "<input type='text' value='$correo' readonly>";
            echo "<p>Contraseña</p> ";
            echo "<input type='text' value='$pass' readonly>";
            echo "<p>Rol</p> ";
            echo "<input type='text' value='$rol' readonly>";
        echo "</form>";
    ?>
        <div class="btn_navegacion">
            <a href="anterior.php"><img src="https://cdn.icon-icons.com/icons2/1132/PNG/512/1486348526-arrow-back-backwards-repeat-previous_80453.png" width="20px"></a>
            <a href="siguiente.php"><img src="https://cdn.icon-icons.com/icons2/1132/PNG/512/1486348525-music-forward-front-next-arrow_80457.png" width="20px"></a>
        </div>
        <div class="btn_editar">
            <a href="#" id="editar">Editar</a> <a href="#" id="aplicar">Aplicar</a>
        </div>
    </section>
    <section class="btn_volver">
        <a href="../../index.php">Volver a Inicio</a>
    </section>
        
    <?php

      
    }
    ?>


<!--
     http://localhost/web-reto3/php/navegacion/navegacion.php# 
    -->