<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Superar Reforço Escolar - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Bootstrap e Estilos -->
    <link href="modelo%20de%20site%20pr%C3%A9-escolar%20kider_arquivos/bootstrap.min.css" rel="stylesheet">
    <link href="modelo%20de%20site%20pr%C3%A9-escolar%20kider_arquivos/style.css" rel="stylesheet">
    <link href="modelo%20de%20site%20pr%C3%A9-escolar%20kider_arquivos/bootstrap-icons.css" rel="stylesheet">

    <style>
        .form-login {
            max-width: 450px;
            margin: 80px auto;
            padding: 30px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }

        .form-login h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #0d6efd;
        }

        @media (max-width: 576px) {
            .form-login {
                margin: 40px 15px;
            }
        }
    </style>
</head>

<body>

    <div class="container-xxl bg-white p-0">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="index.php" class="navbar-brand">
                <h1 class="m-0 text-primary">Superar Reforço Escolar</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            
        </nav>

        <!-- Formulário de Login -->
        <div class="container">
            <form action="valida_login.php" method="POST" class="form-login">
                <h2>Login</h2>

                <?php
                if (isset($_GET['erro'])) {
                    echo '<div class="alert alert-danger">Usuário ou senha inválidos.</div>';
                }
                ?>

                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="senha" class="form-label">Senha:</label>
                    <input type="password" id="senha" name="senha" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Entrar</button>

                <p class="text-center mt-3">
                    Não tem conta? <a href="cadastro.php">Cadastre-se</a>
                </p>
            </form>
        </div>

        <footer class="bg-light text-center py-4 mt-5">
            <p class="mb-0">© 2025 Superar Reforço Escolar. Todos os direitos reservados.</p>
        </footer>

    </div>

    <!-- Scripts -->
    <script src="modelo%20de%20site%20pr%C3%A9-escolar%20kider_arquivos/bootstrap.bundle.min.js"></script>
</body>

</html>
