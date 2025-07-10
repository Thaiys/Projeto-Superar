<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro_alunos";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Receber dados do formulário
$nome = $conn->real_escape_string($_POST['nome']);
$email = $conn->real_escape_string($_POST['email']);
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Criptografa a senha
$endereco = $conn->real_escape_string($_POST['endereco']);

// Inserir dados
$sql = "INSERT INTO alunos (nome, email, senha, endereco) 
        VALUES ('$nome', '$email', '$senha', '$endereco')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href='cadastro.php';</script>";
} else {
    echo "Erro ao cadastrar: " . $conn->error;
}

$conn->close();
?>
