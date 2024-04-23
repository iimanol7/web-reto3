<?php
   session_start();
    $posicion =  $_SESSION['posicion']; 

    $totalUsuarios =  $_SESSION['total'];

    if($posicion<$totalUsuarios-1){
        $_SESSION['posicion']++;
        $posicion =  $_SESSION['posicion']; 
    }
    header('location: navegacion.php');
?>