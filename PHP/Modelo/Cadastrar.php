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
    <title>AlviVerde library</title>

</head>
    <body class="" style="background-image: url(../Modelo/Imagens/fundo\ verde.jpg);">
      
        <nav class="navbar navbar-expand-lg" style="background-color:rgba(255, 255, 255, 0.87);">
            <div class="container-fluid">
              <a class="navbar-brand" style="color: rgb(0, 0, 0);"  href="../Modelo/index.html">AlviVerde </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
    
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page"  style="color: rgb(0, 0, 0);" href="../Modelo/index.html">Pagina Inicial</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link"style="color: rgb(0, 0, 0);;" href="">Quem somos?</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="color: rgb(0, 0, 0);"aria-expanded="false">
                      Mais opções
                    </a>
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
                <form class="form" action="/cadastrarUsuario" method="POST">
                    <p class="title">Cadastro </p>
                    <p class="message"></p>
                    <label>
                      <input class="input" type="text" name="nome" placeholder="" required="">
                      <span>Nome:</span>
                  </label>
                        <div class="flex">
                          
                        <label>
                            <input class="input" type="text" name="usuario" placeholder="" required="">
                            <span>Usuário:</span>
                        </label>
        
                        <label>
                            <input class="input" type="text" name="senha" placeholder="" required="">
                            <span>Senha:</span>
                        </label>
                    </div>
        
                    <label>
                        <input class="input" type="number" name="telefone" placeholder="" required="">
                        <span>Telefone:</span>
                    </label>
        
                    <label>
                        <input class="input" type="number" name="cpf" placeholder="" required="">
                        <span>CPF:</span>
                    </label>

                    <button class="submit">Criar
                      <?php
                        $nome = $_POST['nome'];
                        $usuario = $_POST['usuario'];
                        $senha = $_POST['senha'];
                        $telefone= $_POST['telefone'];
                        $cpf = $_POST['cpf'];
                        
                        cadastrarCliente($nome,$usuario,$senha,$telefone,$cpf);
                        
                      ?>

                    </button>
                    <p class="signin">Já tem uma conta? <a href="../Modelo/Login.php">Entrar</a> </p>
                </form>
                <br><br><br><br>
            </div>
    </body>
</html>