<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "banco_php";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

$sql = "SELECT * FROM professor; 
        SELECT * FROM aluno;
        SELECT * FROM curso;
        SELECT * FROM aula;";

if ($conn->multi_query($sql)) {
    $found_records = false; 
    do {
        
        if ($result = $conn->store_result()) {
            
            while ($row = $result->fetch_assoc()) {
                $found_records = true; 
                print_r($row);
                echo "</pre>";
            }
            
            $result->free();
        }
    } while ($conn->next_result());

    if (!$found_records) {
        echo "<p>Nenhum registro encontrado.</p>";
    }
} else {
    echo "Erro ao executar consulta: " . $conn->error;
}

$conn->close();
?>