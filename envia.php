<?php

$remitente = $_POST['email'];
$destinatario = 'info@makhalu-ac.com'; // en esta línea va el mail del destinatario.
$asunto = 'Consulta desde Web'; 
if (!$_POST){
?>

<?php
}else{
	 
    $cuerpo = "Nombre y apellido: " . $_POST["nombre"] . "\r\n"; 
    $cuerpo .= "Email: " . $_POST["email"] . "\r\n";
    $cuerpo .= "País: " . $_POST["pais"] . "\r\n";
    $cuerpo .= "Teléfono: " . $_POST["telefono"] . "\r\n";
    $cuerpo .= "Mensaje: " . $_POST["consulta"] . "\r\n";

    


    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['nombre']." \" <".$remitente.">\n";

    mail($destinatario, $asunto, $cuerpo, $headers);
    
    include 'confirma.php'; 
}
?>
?>
