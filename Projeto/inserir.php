<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$database = "banco_php";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $database);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

$sql = "INSERT INTO professor (nome, especialidade, email) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $_POST['professor_nome'], $_POST['professor_especialidade'], $_POST['professor_email']);
$stmt->execute();
$stmt->close();

$sql = "INSERT INTO aluno (nome, idade, email) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sis", $_POST['aluno_nome'], $_POST['aluno_idade'], $_POST['aluno_email']);
$stmt->execute();
$stmt->close();

$sql = "INSERT INTO curso (nome, descricao, duracao) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi", $_POST['curso_nome'], $_POST['curso_descricao'], $_POST['curso_duracao']);
$stmt->execute();
$stmt->close();

$sql = "INSERT INTO aula (titulo, descricao, data, hora, id_curso) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssi", $_POST['aula_titulo'], $_POST['aula_descricao'], $_POST['aula_data'], $_POST['aula_hora'], $id_curso);
$stmt->execute();
$stmt->close();

$conn->close();

// Redirecionar de volta para o formulário com uma mensagem de sucesso
header("Location: formulario.php?sucesso=true");
exit();
?>
