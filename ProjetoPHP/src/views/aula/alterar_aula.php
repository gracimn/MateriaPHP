<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Aula</title>
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

        .form-control {
            background-color: #ffffff;
            color: #4d3872;
            border-color: #b8a3d3;
        }

        .btn-primary {
            background-color: #9568c7;
            border-color: #9568c7;
            color: #ffffff;
        }

        .btn-primary:hover {
            background-color: #7c4f9f;
            border-color: #7c4f9f;
        }
    </style>
</head>
<body>
    <main class="container">
        <h3>Alterar Aula</h3>
        <form action="/aula/alterar/id/<?= $id ?>" method="post">
            <div class="row mb-3">
                <div class="col-6">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" name="nome" class="form-control" value="<?= $nome ?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6">
                    <label for="inicio" class="form-label">Início da Aula:</label>
                    <input type="date" name="inicio" class="form-control" value="<?= $inicio ?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6">
                    <label for="fim" class="form-label">Fim da Aula:</label>
                    <input type="date" name="fim" class="form-control" value="<?= $fim ?>">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
