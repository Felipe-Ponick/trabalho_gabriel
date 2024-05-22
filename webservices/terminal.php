<?php // index.php
 
require_once("./databases/MariaDb.php");
require_once("./models/tarefas.php");
 
$mariaDb = new MariaDb();
$conexao = $mariaDb->dbConnection();
 
// $tarefas = new tarefas($conexao);
// $tarefas->nome = "Gabriel";
// $tarefas->login = "gabriel@teste.com.br";
// $tarefas->senha = "123";
// $tarefas->create();
 
// $tarefas2 = new tarefas($conexao);
// $tarefas2->nome = "Maria";
// $tarefas2->login = "maria@teste.com.br";
// $tarefas2->senha = "123456";
// $tarefas2->create();
 
// $tarefas = new tarefas($conexao);
// $tarefas->id = 1;
// $tarefas->remove();
 
$tarefas = new Tarefa($conexao);
$tarefas->$id_tarefas = 2;
$tarefas->nome = "Maria Clementina";
$tarefas->descricao = "maria@asdrubal.org";
$tarefas->id_usuario = "789456";
$tarefas->update();
 
$lista_de_tarefas = $tarefas->getAll();
 
foreach($lista_de_tarefas as $item){
    echo "nome: {$item['nome']}";
    echo PHP_EOL;
}
$tarefas = new Tarefa($conexao);
$tarefas->getTarefaById(10);
 
if($tarefas->$id_tarefas > 0){
    echo "usuário: {$tarefas->nome} encontrado";
}else{
    echo "Usuário não encontrado";
}
 
echo PHP_EOL;