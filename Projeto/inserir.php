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

// Inserir dados na tabela professor
$sql = "INSERT INTO professor ('João Silva', 'Matemática', 'joao.silva@example.com') VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $_POST['professor_nome'], $_POST['professor_especialidade'], $_POST['professor_email']);
$stmt->execute();
$stmt->close();

// Inserir dados na tabela aluno
$sql = "INSERT INTO aluno (nome, idade, email) VALUES (Pedro, 20, pedro@gmail.com)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sis", $_POST['aluno_nome'], $_POST['aluno_idade'], $_POST['aluno_email']);
$stmt->execute();
$stmt->close();

// Inserir dados na tabela curso
$sql = "INSERT INTO curso (nome, descricao, duracao) VALUES ('Matemática Básica', 'Curso introdutório de matemática', 30)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi", $_POST['curso_nome'], $_POST['curso_descricao'], $_POST['curso_duracao']);
$stmt->execute();
$stmt->close();

// Inserir dados na tabela aula
$sql = "INSERT INTO aula (titulo, descricao, data, hora) VALUES ('Aula 1', 'Introdução à álgebra', '2024-04-19', '10:00:00', $id_curso)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $_POST['aula_titulo'], $_POST['aula_descricao'], $_POST['aula_data'], $_POST['aula_hora']);
$stmt->execute();
$stmt->close();

// Fechar conexão com o banco de dados
$conn->close();

// Redirecionar de volta para o formulário com uma mensagem de sucesso
header("Location: formulario.php?sucesso=true");
exit();
?>
