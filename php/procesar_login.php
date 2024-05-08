<?php
// Sacar los datos de entrada
$email = $_POST['email'];
$pass = $_POST['contraseña'];

// Archivo XML que contiene los usuarios
$archivo_xml = 'usuarios.xml';

// Verificar si el archivo XML existe
if (file_exists($archivo_xml)) {
    // Cargar el XML existente
    $xml = new DOMDocument();
    $xml->load($archivo_xml);

    // Crear una nueva variable para usar con XPath
    $xpath = new DOMXPath($xml);
    $xpath->registerNamespace("php", "http://php.net/xpath");
    $xpath->registerPHPFunctions();

    // Consulta XPath para encontrar al usuario por su correo electrónico
    $consulta = "usuario[correo='$email']";

    // Buscar los nodos que coincidan con la consulta XPath
    $usuarios = $xpath->query($consulta);

    // Comprobar si se encontró al menos un usuario con el correo electrónico proporcionado
    if ($usuarios->length > 0) {
        // Obtener el primer usuario que coincida
        $usuario = $usuarios->item(0);

        // Obtener los datos del usuario
        $nombre = $usuario->getElementsByTagName('nombre')->item(0)->nodeValue;
        $apellidos = $usuario->getElementsByTagName('apellidos')->item(0)->nodeValue;
        $contraseña = $usuario->getElementsByTagName('contraseña')->item(0)->nodeValue;
        $rol = $usuario->getElementsByTagName('rol')->item(0)->nodeValue;


        // Verificar si la contraseña coincide
        if ($contraseña === $pass) {
            // Iniciar sesión y almacenar los datos en la sesión
            session_start();
            $_SESSION['sesion'] = array(
                'nombre' => $nombre,
                'apellidos' => $apellidos,
                'email' => $email,
                'pass' => $pass,
                'rol' => $rol
            );

            // Redirigir al usuario a la página de inicio
            header("Location: ../index.php");
        } else {
            // Contraseña incorrecta
            echo "<script>alert('Contraseña incorrecta. Por favor, inténtelo de nuevo.'); window.location.href = '../login.html';</script>";
        }
    } else {
        // Si el usuario no existe
        //comprueba en el otro xml
        $archivo_xml = 'navegacion/usuarios-register.xml';

        if (file_exists($archivo_xml)) {

            // Cargar el XML existente
            $xml = new DOMDocument();
            $xml->load($archivo_xml);

            // Crear una nueva variable para usar con XPath
            $xpath = new DOMXPath($xml);
            $xpath->registerNamespace("php", "http://php.net/xpath");
            $xpath->registerPHPFunctions();

            // Consulta XPath para encontrar al usuario por su correo electrónico
            $consulta = "usuario[correo='$email']";

            // Buscar los nodos que coincidan con la consulta XPath
            $usuarios = $xpath->query($consulta);
            if ($usuarios->length > 0) {
                // Obtener el primer usuario que coincida
                $usuario = $usuarios->item(0);
        
                // Obtener los datos del usuario
                $nombre = $usuario->getElementsByTagName('nombre')->item(0)->nodeValue;
                $apellidos = $usuario->getElementsByTagName('apellidos')->item(0)->nodeValue;
                $contraseña = $usuario->getElementsByTagName('contraseña')->item(0)->nodeValue;
                $rol = $usuario->getElementsByTagName('rol')->item(0)->nodeValue;
        
        
                // Verificar si la contraseña coincide
                if ($contraseña === $pass) {
                    // Iniciar sesión y almacenar los datos en la sesión
                    session_start();
                    $_SESSION['sesion'] = array(
                        'nombre' => $nombre,
                        'apellidos' => $apellidos,
                        'email' => $email,
                        'pass' => $pass,
                        'rol' => $rol
                    );
        
                    // Redirigir al usuario a la página de inicio
                    header("Location: ../index.php");
                } else {
                    // Contraseña incorrecta
                    echo "<script>alert('Contraseña incorrecta. Por favor, inténtelo de nuevo.'); window.location.href = '../login.html';</script>";
                }
            }else{
                echo "<script>alert('Usuario NO existente. Pruebe otra vez maricon'); window.location.href= '../login.html'; </script>";
            }

        }
    }
} 
?>