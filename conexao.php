<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'rh_bd';

try {
    $con = mysqli_connect($host, $user, $password, $db);
    if (!$con) {
        throw new Exception("Erro de conexão: " . mysqli_connect_error());
    }
} catch (Exception $e) {
    die("Falha na conexão com o banco de dados. Por favor, tente novamente mais tarde.");
}
?>
