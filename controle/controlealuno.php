<?php
//importa o arquivo
require_once("../modelo/aluno.php");
require_once("../modelo/daoaluno.php");
$nomedoaluno= $_POST['nomedoaluno'];
print(' %% ALUNO CADASTRADO%%');
//chamar o objeto 
$objeto= new aluno($_POST['cpf'],$_POST['endereco'],$_POST['cep'],$_POST['telefone'],$_POST['email'],$_POST['idAluno'],$nomedoaluno);
//chamr o daoaluno
$objdao= new daoaluno();
$retorno = $objdao->salvar($objeto); 
//var_dump($retorno);

?>