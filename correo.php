<?php
if (isset($_POST['enviar'])){
if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['msg']) && !
empty($_POST['email'])) {
$nombre = $_POST['nombre'];
$telefone= $_POST['telefone'];
$msg = $_POST['msg'];
$email = $_POST['email'];
$header="From: Juanmiranda2317@gmail.com" ."\r\n";
$header.= "Reply-To: Juanmiranda2317@gmail.com"."\r\n";
$header.= "X-Mailer: PHP/". phpversion();
$email= @email($email, $telefone, $msg, $header);
if ($email) {
    echo "<h4>¡Mail enviado exitosamente!</h4>";
    }
}
}