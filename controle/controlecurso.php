<?php
//importa o arquivo
require_once("../modelo/curso.php");
require_once("../modelo/daocurso.php");


$nomecurso=$_POST['nome'];
print(' %%CURSO CADASTRADO%%');
$data=$_POST['datacurso'];
$datanova =date('Y-m-d', strtotime($data));

//chamar o objeto 
$objeto= new Curso($_POST['codigo'],$_POST['nome'], $datanova, $_POST['carga']);
//chamr o daocurso
$objdao= new daocurso();
$retorno= $objdao->salvar($objeto); 
//var_dump($retorno);
?>