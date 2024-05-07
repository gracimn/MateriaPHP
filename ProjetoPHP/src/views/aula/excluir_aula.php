<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Aula</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #f5f0ff;
            color: #4d3872;
        }

        .container {
            max-width: 600px;
            margin-top: 50px;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
            color: #ffffff;
        }

        .btn-danger:hover {
            background-color: #bd2130;
            border-color: #bd2130;
        }
    </style>
</head>
<body>
    <main class="container">
        <h3>Excluir Aula</h3>
        <form action="/aula/excluir/id/<?= $id ?>" method="post">
            <div class="row mb-3">
                <div class="col-6">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" value="<?= $nome ?>" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6">
                    <label for="inicio" class="form-label">Início da Aula:</label>
                    <input type="text" class="form-control" value="<?= $inicio ?>" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6">
                    <label for="fim" class="form-label">Fim da Aula:</label>
                    <input type="text" class="form-control" value="<?= $fim ?>" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Você tem certeza que deseja excluir esta aula?</p>
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </div>
            </div>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
