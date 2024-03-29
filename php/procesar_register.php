<?php
    //saco los datos 
    $name = $_POST['nombre'];
    $surname = $_POST['apellidos'];
    $email = $_POST['email'];
    $pass = $_POST['contraseña'];
    $rol =  'usuario';

    
    //compruebo que el usuario no exista
    $archivo_xml = 'usuarios.xml';

    // Verificar si el archivo XML existe
    if (file_exists($archivo_xml)) {
        // Cargar el XML existente
        $xml = new DOMDocument();
        $xml->load($archivo_xml);

        #creo una nueva variable para usar con xpath
        $xpath = new DOMXPath($xml);
        #register the php: namespace (required)
        $xpath->registerNamespace("php", "http://php.net/xpath");
        #Register PHP functions (no restrictions)
        $xpath->registerPHPFunctions();
        #consulta xpath
        $criterio = $email;
        $consulta = "usuario[correo='$criterio']";
        #Busco los nodos que cumplen la consulta xpath
        $alumnos = $xpath->query($consulta);
        #compruebo cuantos nodos ha producido la consulta
        $numNodos = $alumnos->length;
        if($numNodos > 0) {
            //si el usuario existe
            //saco alerta y redirijo a la página
            echo "<script>alert('Usuario YA existente. Pruebe con otro'); window.location.href= '../register.html'; </script>";
        }else {
            
            //si NO existe dicho usuario
           //llamo al generador de XML
           include 'generar_xml.php';

           //creo la sesión
           session_start();
           $_SESSION['sesion']=array();
           //añado los datos al array, pero en vez de numeros, les doy nombre a las posiciones
           $_SESSION['sesion']['nombre']=$name;
           $_SESSION['sesion']['apellidos']=$surname;
           $_SESSION['sesion']['email']=$email;
           $_SESSION['sesion']['pass']=$pass;
           $_SESSION['sesion']['rol']=$rol;


           //redirigo a la pestaña de inicio
           header("Location: ../index.php");
       }
        
    } else{
        include 'generar_xml.php';
        //creo la sesión
        session_start();
        $_SESSION['sesion']=array();
        //añado los datos al array, pero en vez de numeros, les doy nombre a las posiciones
        $_SESSION['sesion']['nombre']=$name;
        $_SESSION['sesion']['apellidos']=$surname;
        $_SESSION['sesion']['email']=$email;
        $_SESSION['sesion']['pass']=$pass;
        $_SESSION['sesion']['rol']=$rol;


        header("Location: ../index.php");
    } 

    
 
?>