<?php
    $receiver = 'didaljalir@gmail.com';
    // email receiver //

    $name = $_POST['name'];
    $email = $_POST['email'];
    $nachricht = $_POST['nachricht'];

    $header = "GESENDET VON DER WEBSEITE DM-DEIDAL MEJIA";
    $fullMessage = $message . "\nMit freundlichen Grüßen: " . $nombre;

    mail($receiver, $fullMessage, $header);
    echo "<script>alert(Mail erfolgreich gesendet)</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
?>