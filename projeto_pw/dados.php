<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style/dados.css">
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
    <title>Dados do Funcionário</title>
</head>
<body>
    <!-- Bootstrap Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Empresa XPTO</a>
        </div>
    </nav>
    <!-- Padding to ensure content isn't hidden behind the fixed navbar -->
    <div class="container mt-5 pt-4">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $imagem_url = 'uploads/default.jpg'; // Default image if no upload
            if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
                $foto = $_FILES['foto'];
                $caminho_salvo = "uploads/" . basename($foto['name']);
                if(move_uploaded_file($foto['tmp_name'], $caminho_salvo)) {
                    $imagem_url = $caminho_salvo;
                }
            }
        ?>
            <div class="card">
                <div class="data-header">Dados do Funcionário</div>
                <div class="info-item"><strong>ID:</strong> <?= $_POST['id'] ?? 'Não informado'; ?></div>
                <div class="info-item"><strong>Nome:</strong> <?= $_POST['nome'] ?? 'Não informado'; ?></div>
                <div class="info-item"><strong>Endereço:</strong> <?= $_POST['endereco'] ?? 'Não informado'; ?></div>
                <div class="info-item"><strong>Idade:</strong> <?= $_POST['idade'] ?? 'Não informado'; ?></div>
                <div class="info-item"><strong>Data de Nascimento:</strong> <?= date("d/m/Y", strtotime($_POST['datanasc'] ?? '0000-00-00')); ?></div>
            </div>
            <div class="card img-card">
                <h5 class="data-header">Foto do Funcionário</h5>
                <img src="<?= $imagem_url ?>" alt="Foto do funcionário">
            </div>
            <div class="btn-back mt-3">
                <button onclick="history.back()" class="btn btn-info">Voltar ao Formulário</button>
            </div>
        <?php
        } else {
            echo "<div class='alert alert-warning text-center'>Nenhuma informação foi submetida.</div>";
        }
        ?>
    </div>
</body>
</html>