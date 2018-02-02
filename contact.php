<?php

$para      = 'administracion@centrohospitalarioguayana.com.ve';
$titulo    = $_POST['name'];
$mensaje   = $_POST['name']." \n".$_POST['phone']. " \n" .$_POST['comments'] ;
$cabeceras = 'From:' .$_POST['email'] . "\r\n" .
    'Reply-To:' .$_POST['email'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);
?>
