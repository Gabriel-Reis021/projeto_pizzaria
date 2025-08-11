<?php
session_start();

$user = "if0_39677648";
$pass = "gabrielelibni12";
$db = "if0_39677648_pizzaria";
$host = "sql105.infinityfree.com";

try {
   $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch(PDOException $e) {
    print "Erro: " . $e->getMessage() . "<br/>";
    die();
}
?>
