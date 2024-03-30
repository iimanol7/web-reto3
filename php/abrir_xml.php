<!-- muestro un documento xml usando un archivo de transformacion xsl -->
<?php

//inicio la sesión
session_start();
//la guardo en una variable para mayor rapidez
$nombresesion =$_SESSION['sesion'];
//compruebo que el usuario sea admin
if($nombresesion['rol'] !='administrador'){
    //le digo que no tiene permisos
    //header("Location: error.php");
    echo "<div style='display:flex; justify-content:center;flex-direction:column;'>";
    echo "<h1 style='text-align:center;'>NO TIENES PERMISOS</h1>";
    echo "<img src='../img/jugador.jpg' style='margin:auto;'>";
    echo "</div>";
    //acabo la ejecución
    die();
}


//si es admin...
#cargo el fichero xml
$xml = new DOMDocument;
$xml->load('usuarios.xml');
#cargo el fichero xsl
$xsl = new DOMDocument;
$xsl->load('usuarios.xsl');
#lo transformo
$proc = new XSLTProcessor;
$proc->importStyleSheet($xsl);

#muestro el resultado
echo $proc->transformToXML($xml);

?>