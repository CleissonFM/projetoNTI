<?php

require_once("modelo/daocurso.php");
require_once("modelo/daoaluno.php");
require_once("modelo/cursoAluno.php");
require_once("modelo/daocursoAluno.php");
$objdaoaluno= new daoaluno();
$objdaocurso= new daocurso();
$objdaocursoAluno= new daocursoAluno();
$retorno=$objdaocurso->buscarcurso();
$retorno2=$objdaoaluno->buscaraluno();
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aref+Ruqaa">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/styles.min.css"></head>

<body>
<nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container">
            <a class="navbar-brand" href="#" style="color:rgba(74,112,89,0.76);font-family:Alegreya, serif;">
                 </a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="CADASTROCURSO.php">CADASTRO DO CURSO</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="CADASTROALUNO.php">CADASTRO DO ALUNO</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="LISTARALUNO.php">LISTAR ALUNO</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="LISTARCURSO.php">LISTAR CURSO</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="CURSOEALUNO.php">CURSO & ALUNO</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="controler/sairController.php?=">Sair</a></li>
                </ul>
        </div>
        </div>

            </nav><label></label>
    <label>CURSOS CADASTRADOS</label>
    <form method="post" action="controle/controlecursoealuno.php">
                 

<div class="container d-flex float-none justify-content-center align-items-center align-content-center mx-auto">
            <select name="idCurso" style="width:433px;padding-top:4px;height:47px;">
                <?php foreach ($retorno as $lista) { ?>
                            <option value="<?php echo $lista['idCurso'];?>">
                             <?php echo utf8_encode($lista['nomeCurso']);}?> 
                             </option> 
            
        </select>
        <label style="color:rgba(0,0,0,0.9);margin-left:10px;"></label>

        <select name="idAluno" style="width:433px;padding-top:4px;height:47px;">
                <?php foreach ($retorno2 as $lista) { ?>
                            <option value="<?php echo $lista['idAluno'];?>"> <?php echo  
                            utf8_encode($lista['nomedoaluno']);}?> 
                             </option>     
        </select>  
</div>

<button
class="btn btn-primary" type="submit" style="background-color:#4a7059;color:#fcf9f9;width:330px;margin-left:20px;padding:8px;padding-top:8px;margin-top:20px;border-color:#4a7059;">ENVIAR</button>

                        </form>
            </nav>
</body>
</html>