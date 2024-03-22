<?php
// Ruta del archivo XML
$archivo_xml = 'usuarios.xml';

// Verificar si el archivo XML existe
if (file_exists($archivo_xml)) {
    // Cargar el XML existente
    $xml = new DOMDocument();
    $xml->load($archivo_xml);
} else {
    // Si el archivo no existe, crear un nuevo XML con el elemento raíz 'alumnos'
    $xml = new DOMDocument('1.0', 'utf-8');
    $raiz = $xml->createElement('usuarios');
    $xml->appendChild($raiz);
}

// Crear un nuevo nodo 'alumno' y agregar los datos
$nuevoNodo = $xml->createElement('usuario');
$nombre = $xml->createElement('nombre', $name);
$nuevoNodo->appendChild($nombre);
$apellidos = $xml->createElement('apellidos', $surname);
$nuevoNodo->appendChild($apellidos);
$correo = $xml->createElement('correo', $email);
$nuevoNodo->appendChild($correo);
$contraseña = $xml->createElement('contraseña', $pass);
$nuevoNodo->appendChild($contraseña);
//////////////////////////////////////////
//guardo en la variable raiz la raiz del documento
$raiz = $xml->documentElement;
// Agregar el nuevo nodo 'alumno' al XML
$raiz->appendChild($nuevoNodo);
/////////////////////////////////////

// Guardar el XML de vuelta en el archivo
$xml->save($archivo_xml);

?>