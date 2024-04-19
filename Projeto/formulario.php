<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Registros</title>
</head>
<body>
    <h1>Inserir Registros</h1>
    <form action="inserir.php" method="post">
        <h2>Professor</h2>
        Nome: <input type="text" name="professor_nome"><br>
        Especialidade: <input type="text" name="professor_especialidade"><br>
        Email: <input type="email" name="professor_email"><br><br>

        <h2>Aluno</h2>
        Nome: <input type="text" name="aluno_nome"><br>
        Idade: <input type="number" name="aluno_idade"><br>
        Email: <input type="email" name="aluno_email"><br><br>

        <h2>Curso</h2>
        Nome: <input type="text" name="curso_nome"><br>
        Descrição: <textarea name="curso_descricao"></textarea><br>
        Duração: <input type="number" name="curso_duracao"><br><br>

        <h2>Aula</h2>
        Título: <input type="text" name="aula_titulo"><br>
        Descrição: <textarea name="aula_descricao"></textarea><br>
        Data: <input type="date" name="aula_data"><br>
        Hora: <input type="time" name="aula_hora"><br><br>

        <input type="submit" value="Inserir Registros">
    </form>
</body>
</html>
