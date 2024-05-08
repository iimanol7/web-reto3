<?php

    #cargo el fichero xml
    $xmlUsuarios = new DOMDocument;
    $xmlUsuarios->load('datos.xml');

    #creo una nueva variable para usar con xpath
    $xpath = new DOMXPath($xmlUsuarios);
    #register the php: namespace (required)
    $xpath->registerNamespace("php", "http://php.net/xpath");
    #Register PHP functions (no restrictions)
    $xpath->registerPHPFunctions();

    #consulta xpath
    $consulta = "usuarios";
    #Busco los nodos que cumplen la consulta xpath
    $usuarios = $xpath->query($consulta);

    #compruebo cuantos nodos ha producido la consulta
    $numNodos = $usuarios->length;
    if($numNodos > 0) {

        // Crear un nuevo documento XML
        $nuevoxmlUsuarios = new DOMDocument('1.0', 'UTF-8');

        foreach ($usuarios as $usuario) {
            #por cada registro encontrado
            $nuevaTemporada = $nuevoxmlUsuarios->importNode($usuario, true);
            $nuevoxmlUsuarios->appendChild($nuevaTemporada);
        }
        $nuevoxmlUsuarios->save('php/usuarios.xml');
    }
    
?>