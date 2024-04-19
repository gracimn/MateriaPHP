<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$database = "banco_php";

// Configurações do banco de dados
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$database = "seu_banco_de_dados";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $database);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Consulta para selecionar todos os registros de todas as tabelas
$sql = "SELECT * FROM professor; 
        SELECT * FROM aluno;
        SELECT * FROM curso;
        SELECT * FROM aula;";

// Executa a consulta
if ($conn->multi_query($sql)) {
    do {
        // Armazena o resultado da consulta
        if ($result = $conn->store_result()) {
            // Imprime os registros de cada tabela
            while ($row = $result->fetch_assoc()) {
                echo "<pre>";
                print_r($row);
                echo "</pre>";
            }
            // Libera o resultado da consulta
            $result->free();
        }
    } while ($conn->next_result());
} else {
    echo "Erro ao executar consulta: " . $conn->error;
}

// Fechar conexão com o banco de dados
$conn->close();
?>
