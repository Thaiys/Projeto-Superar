<?php
// Configuração de conexão com o banco de dados
$servername = "localhost"; // Endereço do servidor MySQL
$username = "root"; // Seu usuário do MySQL
$password = ""; // Sua senha do MySQL
$dbname = "cadastro_alunos"; // Nome do banco de dados

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Receber os dados enviados pelo formulário
$data = json_decode(file_get_contents("php://input"));

$nome = $data->nome;
$telefone = $data->telefone;
$bairro = $data->bairro;
$endereco = $data->endereco;
$cidade = $data->cidade;

// Inserir os dados no banco de dados
$sql = "INSERT INTO alunos (nome, telefone, bairro, endereco, cidade) 
        VALUES ('$nome', '$telefone', '$bairro', '$endereco', '$cidade')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["status" => "sucesso"]);
} else {
    echo json_encode(["status" => "erro", "message" => $conn->error]);
}

// Fechar a conexão
$conn->close();
?>
