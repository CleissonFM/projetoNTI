<?php
//importa o arquivo
require_once("../modelo/cursoAluno.php");
require_once("../modelo/daocursoAluno.php");
$idCurso= $_POST['idCurso'];
$idAluno= $_POST['idAluno'];
print(' %% CADASTRADO REALIZADO %%');
echo $idCurso, $idAluno;

//chamar o objeto 
$objeto= new cursoaluno($_POST['idCurso'],$_POST['idAluno']);
//chamr o daoaluno
$objdao= new daocursoaluno();
$retorno = $objdao->salvar($objeto); 
//var_dump($retorno);

?>