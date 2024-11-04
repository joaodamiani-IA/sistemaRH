<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $username = $_POST['username'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM funcionarios WHERE username = '$username' AND senha = '$senha'";
    $resultado = mysqli_query($con, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        echo 'Login realizado com sucesso!';
    } else {
        echo 'Usuário ou senha inválido! <a href="login.html">Voltar</a>';
    }
}
?>
