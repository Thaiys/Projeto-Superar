<?php
session_start();

// Conexão com o banco
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro_alunos";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$email = $_POST['email'];
$senha = $_POST['senha'];

// Buscar usuário
$sql = "SELECT * FROM alunos WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
    $usuario = $result->fetch_assoc();

    // Verifica a senha
    if (password_verify($senha, $usuario['senha'])) {
        $_SESSION['usuario'] = $usuario['nome'];
        $_SESSION['email'] = $usuario['email'];
        header("Location: area_restrita.php"); // redireciona para área logada
        exit;
    }
}

header("Location: login.php?erro=1");
exit;
?>
