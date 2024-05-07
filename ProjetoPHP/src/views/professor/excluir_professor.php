<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Excluir Professor</title>
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
            background-color: #c82333;
            border-color: #bd2130;
        }
    </style>
</head>
<body>
    <main class="container mt-5">
        <h3>Excluir Professor</h3>
        <form action="/professor/excluir" method="POST">
            <div class="row mb-3 mt-3">
                <div class="col-6">
                    <input type="hidden" name="id" value="<?= $professor["id"]; ?>">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome" disabled value="<?= $professor["nome"]; ?>">
                    <label for="idade" class="form-label">Idade:</label>
                    <input type="number" class="form-control" name="idade" placeholder="Idade" disabled value="<?= $professor["idade"]; ?>">
                    <label for="materia" class="form-label">Matéria:</label>
                    <input type="text" class="form-control" name="materia" placeholder="Matéria" disabled value="<?= $professor["materia"]; ?>">
                </div>
            </div>
            <p>Você deseja realmente excluir esse registro?</p>
            <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
