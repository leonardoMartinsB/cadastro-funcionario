<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style/form.css">
  
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
    <title>Cadastro de Funcionário</title>
</head>
<body>
    <nav class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Empresa XPTO</a>
        </div>
    </nav>
    <div class="container">
        <form action="dados.php" method="post" enctype="multipart/form-data">
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="id" name="id" placeholder="ID" required>
                <label for="id">ID:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" maxlength="50" required>
                <label for="nome">Nome:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço" maxlength="50" required>
                <label for="endereco">Endereço:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="idade" name="idade" placeholder="Idade" required>
                <label for="idade">Idade:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="date" class="form-control" id="datanasc" name="datanasc" placeholder="Data de Nascimento" required>
                <label for="datanasc">Data de Nascimento:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="file" class="form-control" id="foto" name="foto" required>
                <label for="foto">Foto:</label>
            </div>
            <div class="btn-container">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </form>
    </div>
</body>
</html>