<?php
// Incluir o arquivo de conexão
require_once(__DIR__ . '/../DAO/Conexao.php');
 // Ajuste o caminho conforme necessário

// Código PHP para processar o formulário
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT); // Hash da senha
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];

    // Conectar ao banco de dados
    $conexao = new \PHP\Modelo\DAO\Conexao(); // Ajuste o namespace conforme necessário
    $conn = $conexao->conectar();

    // Verificar se a conexão foi bem-sucedida
    if ($conn) {
        // Preparar a consulta SQL
        $sql = "INSERT INTO cliente (nome, usuario, senha, telefone, cpf) VALUES (?, ?, ?, ?, ?)";

        // Preparar a consulta
        $stmt = mysqli_prepare($conn, $sql);

        // Verificar se a preparação foi bem-sucedida
        if ($stmt) {
            // Bind dos parâmetros
            mysqli_stmt_bind_param($stmt, 'sssss', $nome, $usuario, $senha, $telefone, $cpf);

            // Executar a consulta SQL
            if (mysqli_stmt_execute($stmt)) {
                echo "<p>Cadastro realizado com sucesso!</p>";
            } else {
                echo "<p>Erro ao cadastrar: " . mysqli_stmt_error($stmt) . "</p>";
            }

            // Fechar a consulta
            mysqli_stmt_close($stmt);
        } else {
            echo "<p>Erro ao preparar a consulta: " . mysqli_error($conn) . "</p>";
        }

        // Fechar a conexão
        mysqli_close($conn);
    } else {
        echo "<p>Erro na conexão com o banco de dados!</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Modelo/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <title>AlviVerde Library</title>
</head>
<body style="background-image: url(../Modelo/Imagens/fundo\ verde.jpg);">
    <nav class="navbar navbar-expand-lg" style="background-color:rgba(255, 255, 255, 0.87);">
        <div class="container-fluid">
            <a class="navbar-brand" style="color: rgb(0, 0, 0);" href="../Modelo/index.html">AlviVerde</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" style="color: rgb(0, 0, 0);" href="../Modelo/index.html">Pagina Inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: rgb(0, 0, 0);" href="#">Quem somos?</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="color: rgb(0, 0, 0);" aria-expanded="false">Mais opções</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Catálogo</a></li>
                            <li><a class="dropdown-item" href="#">Localização</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Lançamentos</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Enviar</button>
                    <a href="../Modelo/login.html" class="btn btn-outline-success" role="button">Login</a>
                </form>
            </div>
        </div>
    </nav>
    <div class="p-3 mb-2 text-white">
        <br><br><br><br>
        <form class="form" action="" method="POST">
            <p class="title">Cadastro</p>
            <p class="message"></p>
            <label>
                <input class="input" type="text" name="nome" placeholder="" required>
                <span>Nome:</span>
            </label>
            <div class="flex">
                <label>
                    <input class="input" type="text" name="usuario" placeholder="" required>
                    <span>Usuário:</span>
                </label>
                <label>
                    <input class="input" type="password" name="senha" placeholder="" required>
                    <span>Senha:</span>
                </label>
            </div>
            <label>
                <input class="input" type="text" name="telefone" placeholder="" required>
                <span>Telefone:</span>
            </label>
            <label>
                <input class="input" type="text" name="cpf" placeholder="" required>
                <span>CPF:</span>
            </label>
            <button class="submit" type="submit">Criar</button>
            <p class="signin">Já tem uma conta? <a href="../Modelo/Login.php">Entrar</a></p>
        </form>
        <br><br><br><br>
    </div>
</body>
</html>
