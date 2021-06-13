<?php

ini_set("display_errors", "1");
error_reporting(E_ALL);

require_once("config.php");

//Carrega um usuário
//$root = new Usuario();
//$root->loadbyId(10);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("ta");
//echo json_encode($search);

//Carrega o usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("canon", "alanturok");
//echo $usuario;

//Criando um nobo usuario
//$aluno = new Usuario("aluno", "@lun0");
//$aluno->insert();
//echo $aluno;

//Atualizar um usuario no mysql

//$usuario = new Usuario();
//$usuario->loadbyId(14);
//$usuario->update("professor", "Camisaque@#$");
//echo $usuario;
//echo "<br/>";
//echo "<br/>";
//echo "Usuario atualizado com sucesso.";

//Deletando um usuário

$usuario = new Usuario();
$usuario->loadbyId(13);
$usuario->delete();
echo $usuario;
echo "<br/>";
echo "<br/>";
echo "Usuario deletado com sucesso.";



/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/



?>