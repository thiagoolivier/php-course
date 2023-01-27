<?php

require_once("config.php");

//Carrega somente 1 usuario
// $root = new Usuario();
// $root->loadbyId(2);
// echo $root;

// Carrega uma lista de usuarios
// $lista = Usuario::getList();
// echo json_encode($lista);

//Carrega uma lista de usuario buscando pelo login
// $search = Usuario::search("jo");
// echo json_encode($search);

//Carrega um usuario se login e senha forem compatíveis
// $usuario = new Usuario();
// $usuario->login("thiago", "123345");
// echo $usuario;

//Criando um novo usuário, recebendo login e senha no __construct da classe Usuario()
// $aluno = new Usuario("aluno2", "1222222222");
// $aluno->insert();
// echo $aluno;

// $usuario = new Usuario();
// $usuario->loadById(2);
// $usuario->update("thiago", "thiago123@T");


//apaga o usuário selecionado pelo loadById();

$usuario = new Usuario();

$usuario->loadById(7);

$usuario->delete();

echo $usuario;

?>