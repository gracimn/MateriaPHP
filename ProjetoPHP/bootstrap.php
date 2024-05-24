<?php

require __DIR__."/vendor/autoload.php";

$metodo = $_SERVER['REQUEST_METHOD'];
$caminho = $_SERVER['PATH_INFO'] ?? '/';

#use Php\Primeiroprojeto\Router
$r = new Php\Primeiroprojeto\Router($metodo, $caminho);

#ROTAS

$r->get('/olamundo', 
    'Php\Primeiroprojeto\Controllers\HomeController@olaMundo');

$r->get('/olapessoa/{nome}', function($params){ 
    return 'Olá'.$params[1]; 
} );

$r->get('/exer1/formulario', 
    'Php\Primeiroprojeto\Controllers\HomeController@formExer1');

$r->post('/exer1/resposta', function(){
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $soma = $valor1 + $valor2;
    return "A soma é: {$soma}";
});

$r->get('/exer4/formulario', function(){
    require_once('exer4.html');
});

$r->post('/exer4/resposta', function(){
    $valor = $_POST['valor1'];
    $resposta = "";
    for ($i=1; $i<=10; $i++){
        $resultado = $valor * $i;
        $resposta .= "$valor x $i = $resultado<br/>";
    }
    return $resposta;
});
# Projeto CRUD

# Categoria
# Consultando todas as categorias cadastradas
$r->get('/categoria', 'Php\Primeiroprojeto\Controllers\CategoriaController@index');
$r->get('/categoria/{acao}/{status}', 'Php\Primeiroprojeto\Controllers\CategoriaController@index');

# Chamando o formulário para inserir o registro
$r->get('/categoria/inserir', 'Php\Primeiroprojeto\Controllers\CategoriaController@inserir');

# Enviando os dados para serem armazenados no banco de dados
$r->post('/categoria/novo', 'Php\Primeiroprojeto\Controllers\CategoriaController@novo');

# Enviando os dados para serem armazenados no banco de dados
$r->get('/categoria/alterar/id/{id}', 'Php\Primeiroprojeto\Controllers\CategoriaController@alterar');

# Enviando os dados para serem armazenados no banco de dados
$r->get('/categoria/excluir/id/{id}', 'Php\Primeiroprojeto\Controllers\CategoriaController@excluir');

# Enviando os dados para serem armazenados no banco de dados
$r->post('/categoria/editar', 'Php\Primeiroprojeto\Controllers\CategoriaController@editar');

# Enviando os dados para serem armazenados no banco de dados
$r->post('/categoria/deletar', 'Php\Primeiroprojeto\Controllers\CategoriaController@deletar');


# Professor
$r->get('/professor', 'Php\Primeiroprojeto\Controllers\ProfessorController@index');
$r->get('/professor/{acao}/{status}', 'Php\Primeiroprojeto\Controllers\ProfessorController@index');

# Chamando o formulário para inserir o registro
$r->get('/professor/inserir', 'Php\Primeiroprojeto\Controllers\ProfessorController@inserir');

# Enviando os dados para serem armazenados no banco de dados
$r->post('/professor/novo', 'Php\Primeiroprojeto\Controllers\ProfessorController@novo');

# Enviando os dados para serem armazenados no banco de dados
$r->get('/professor/alterar/id/{id}', 'Php\Primeiroprojeto\Controllers\ProfessorController@alterar');

# Enviando os dados para serem armazenados no banco de dados
$r->get('/professor/excluir/id/{id}', 'Php\Primeiroprojeto\Controllers\ProfessorController@excluir');

# Enviando os dados para serem armazenados no banco de dados
$r->post('/professor/editar', 'Php\Primeiroprojeto\Controllers\ProfessorController@editar');

# Enviando os dados para serem armazenados no banco de dados
$r->post('/professor/deletar', 'Php\Primeiroprojeto\Controllers\ProfessorController@deletar');


# Cliente

# Consultando todas os clientes cadastradas
$r->get('/aluno', 'Php\Primeiroprojeto\Controllers\AlunoController@index');
$r->get('/aluno/{acao}/{status}', 'Php\Primeiroprojeto\Controllers\AlunoController@index');

# Chamando o formulário para inserir o registro
$r->get('/aluno/inserir', 'Php\Primeiroprojeto\Controllers\AlunoController@inserir');

# Enviando os dados para serem armazenados no banco de dados
$r->post('/aluno/novo', 'Php\Primeiroprojeto\Controllers\AlunoController@novo');

# Enviando os dados para serem armazenados no banco de dados
$r->post('/aluno/novo', 'Php\Primeiroprojeto\Controllers\AlunoController@novo');

# Enviando os dados para serem armazenados no banco de dados
$r->get('/aluno/alterar/id/{id}', 'Php\Primeiroprojeto\Controllers\AlunoController@alterar');

# Enviando os dados para serem armazenados no banco de dados
$r->get('/aluno/excluir/id/{id}', 'Php\Primeiroprojeto\Controllers\AlunoController@excluir');

# Enviando os dados para serem armazenados no banco de dados
$r->post('/aluno/editar', 'Php\Primeiroprojeto\Controllers\AlunoController@editar');

# Enviando os dados para serem armazenados no banco de dados
$r->post('/aluno/deletar', 'Php\Primeiroprojeto\Controllers\AlunoController@deletar');


# Aula
$r->get('/aula', 'Php\Primeiroprojeto\Controllers\AulaController@index');
$r->get('/aula/{acao}/{status}', 'Php\Primeiroprojeto\Controllers\AulaController@index');

# Chamando o formulário para inserir o registro
$r->get('/aula/inserir', 'Php\Primeiroprojeto\Controllers\AulaController@inserir');

# Enviando os dados para serem armazenados no banco de dados
$r->post('/aula/novo', 'Php\Primeiroprojeto\Controllers\AulaController@novo');

# Enviando os dados para serem armazenados no banco de dados
$r->get('/aula/alterar/id/{id}', 'Php\Primeiroprojeto\Controllers\AulaController@alterar');

# Enviando os dados para serem armazenados no banco de dados
$r->get('/aula/excluir/id/{id}', 'Php\Primeiroprojeto\Controllers\AulaController@excluir');

# Enviando os dados para serem armazenados no banco de dados
$r->post('/aula/editar', 'Php\Primeiroprojeto\Controllers\AulaController@editar');

# Enviando os dados para serem armazenados no banco de dados
$r->post('/aula/deletar', 'Php\Primeiroprojeto\Controllers\AulaController@deletar');


# Curso
$r->get('/curso', 'Php\Primeiroprojeto\Controllers\CursoController@index');
$r->get('/curso/{acao}/{status}', 'Php\Primeiroprojeto\Controllers\CursoController@index');

# Chamando o formulário para inserir o registro
$r->get('/curso/inserir', 'Php\Primeiroprojeto\Controllers\CursoController@inserir');

# Enviando os dados para serem armazenados no banco de dados
$r->post('/curso/novo', 'Php\Primeiroprojeto\Controllers\CursoController@novo');

# Enviando os dados para serem armazenados no banco de dados
$r->get('/curso/alterar/id/{id}', 'Php\Primeiroprojeto\Controllers\CursoController@alterar');

# Enviando os dados para serem armazenados no banco de dados
$r->get('/curso/excluir/id/{id}', 'Php\Primeiroprojeto\Controllers\CursoController@excluir');

# Enviando os dados para serem armazenados no banco de dados
$r->post('/curso/editar', 'Php\Primeiroprojeto\Controllers\CursoController@editar');

# Enviando os dados para serem armazenados no banco de dados
$r->post('/curso/deletar', 'Php\Primeiroprojeto\Controllers\CursoController@deletar');





#ROTAS

$resultado = $r->handler();

if(!$resultado){
    http_response_code(404);
    echo "Página não encontrada";
    die();
}

if($resultado instanceof Closure) {
    echo $resultado($r->getParams());
}
elseif(is_string($resultado)){
    $resultado = explode("@", $resultado); 
    $controller = new $resultado[0]; 
    $resultado = $resultado[1]; 

    echo $controller->$resultado($r->getParams());
}