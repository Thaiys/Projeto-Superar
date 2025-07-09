<?php
// // Configuração de conexão com o banco de dados
// $servername = "localhost"; // Endereço do servidor MySQL
// $username = "root"; // Seu usuário do MySQL
// $password = ""; // Sua senha do MySQL
// $dbname = "cadastro_alunos"; // Nome do banco de dados

// // Criando a conexão
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Verificando a conexão
// if ($conn->connect_error) {
//     die("Conexão falhou: " . $conn->connect_error);
// }

// // Receber os dados enviados pelo formulário
// $data = json_decode(file_get_contents("php://input"));

// $nome = $data->nome;
// $email = $data->email;
// $senha = $data->senha;
// $endereco = $data->endereco;

// // Inserir os dados no banco de dados
// $sql = "INSERT INTO alunos (nome, email, senha, endereco) 
//         VALUES ('$nome', '$email', '$senha', '$endereco')";

// if ($conn->query($sql) === TRUE) {
//     echo json_encode(["status" => "sucesso"]);
// } else {
//     echo json_encode(["status" => "erro", "message" => $conn->error]);
// }

// // Fechar a conexão
// $conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Kider - Preschool Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link
        href="file:///C:/Users/corlab202/Downloads/Kider%20Free%20Website%20Template%20-%20Free-CSS.com/preschool-website-template/img/favicon.ico"
        rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="modelo%20de%20site%20pr%C3%A9-escolar%20kider_arquivos/css2.css" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="modelo%20de%20site%20pr%C3%A9-escolar%20kider_arquivos/all.min.css" rel="stylesheet">
    <link href="modelo%20de%20site%20pr%C3%A9-escolar%20kider_arquivos/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="modelo%20de%20site%20pr%C3%A9-escolar%20kider_arquivos/animate.min.css" rel="stylesheet">
    <link href="modelo%20de%20site%20pr%C3%A9-escolar%20kider_arquivos/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="modelo%20de%20site%20pr%C3%A9-escolar%20kider_arquivos/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="modelo%20de%20site%20pr%C3%A9-escolar%20kider_arquivos/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0" style="top: -100px;">
            <a href="file:///C:/Users/corlab202/Downloads/Kider%20Free%20Website%20Template%20-%20Free-CSS.com/preschool-website-template/index.php"
                class="navbar-brand">
                <h1 class="m-0 text-primary">Superar Reforço Escolar</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="about.php"
                        class="nav-item nav-link">Sobre Nós</a>
                    <a id="aulas"
                        href="classes.php"
                        class="nav-item nav-link">Aulas</a>
                    <a href="contact.php"
                        class="nav-item nav-link">Contate-nos</a>
                    <a href="fotos.php"
                        class="nav-item nav-link">Fotos</a>
                </div>
            
            </div>
        </nav>
        

        <div style="width: 1320px;">
            
        </div>
        <!-- Carousel End -->
        <div class="container">
            <form action="processa.php" method="POST" class="form-cadastro">
            <h2>Formulário de Cadastro</h2>
            
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
            
            <label for="senha">endereco:</label>
            <input type="password" id="endereco" name="endereco" required>
            </form>
        </div>

        
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top" style="display: none;"><i
                class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="modelo%20de%20site%20pr%C3%A9-escolar%20kider_arquivos/jquery-3.4.1.min.js"></script>
    <script src="modelo%20de%20site%20pr%C3%A9-escolar%20kider_arquivos/bootstrap.bundle.min.js"></script>
    <script src="modelo%20de%20site%20pr%C3%A9-escolar%20kider_arquivos/wow.min.js"></script>
    <script src="modelo%20de%20site%20pr%C3%A9-escolar%20kider_arquivos/easing.min.js"></script>
    <script src="modelo%20de%20site%20pr%C3%A9-escolar%20kider_arquivos/waypoints.min.js"></script>
    <script src="modelo%20de%20site%20pr%C3%A9-escolar%20kider_arquivos/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <!-- <script src="modelo%20de%20site%20pr%C3%A9-escolar%20kider_arquivos/main.js"></script> -->
    <script src="script.js"></script>


</body>

</html>


