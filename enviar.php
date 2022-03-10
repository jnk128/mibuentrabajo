<?php
$tipoTrabajo = $_POST['tipoTrabajo'];
$asignatura = $_POST['asignatura'];
$normas = $_POST['normas'];
$tituloTrabajo = $_POST['tituloTrabajo'];
$numeroPaginas = $_POST['numeroPaginas'];
$fechaEntrega = $_POST['fechaEntrega'];
$descripcion = $_POST['descripcion'];
$subir = $_POST['subir'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$codigo = $_POST['codigo'];
 
$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $nombre . " \r\n";
$message .= "Su e-mail es: " . $email . " \r\n";
$message .= "Telefono de contacto: " . $telefono . " \r\n";
$message .= "Codigo promocional: " . $codigo . " \r\n";
$message .= "Tipo de trabajo: " . $tipoTrabajo . " \r\n";
$message .= "Asignatura: " . $asignatura . " \r\n";
$message .= "Normas: " . $normas . " \r\n";
$message .= "Título del trabajo: " . $tituloTrabajo . " \r\n";
$message .= "Número de páginas: " . $numeroPaginas . " \r\n";
$message .= "Fecha de entrega: " . $fechaEntrega . " \r\n";
$message .= "Descripción del trabajo: " . $descripcion . " \r\n";

$message .= "Enviado el: " . date('d/m/Y', time()); 

$para = 'catacora.juan@gmail.com';
$asunto = '--- mibuentrabajo --- NUEVO CLIENTE';

mail($para, $asunto, utf8_decode($message), $header); 

header("Location:index.html");
?>