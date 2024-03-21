<?php
    //saco los datos 
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $pass = $_POST['contraseña'];

    //creo la sesión
    session_start();
    $_SESSION['sesion']=array();
    //añado los datos al array, pero en vez de numeros, les doy nombre a las posiciones
    $_SESSION['sesion']['nombre']=$nombre;
    $_SESSION['sesion']['apellidos']=$apellidos;
    $_SESSION['sesion']['email']=$email;
    $_SESSION['sesion']['pass']=$pass;


    //redirigo a la pestaña de inicio
    header("Location: ../index.php");
?>