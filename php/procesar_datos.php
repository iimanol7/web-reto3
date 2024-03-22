<?php
    //saco los datos 
    $name = $_POST['nombre'];
    $surname = $_POST['apellidos'];
    $email = $_POST['email'];
    $pass = $_POST['contraseña'];

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


    //redirigo a la pestaña de inicio
    header("Location: ../index.php");
?>