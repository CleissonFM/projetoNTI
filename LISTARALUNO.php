<?php
require_once("modelo/aluno.php");
require_once("modelo/daoaluno.php");

$objaluno= new daoaluno();
$retorno=$objaluno->buscaraluno();

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
    <label>ALUNOS CADASTRADOS</label>
                 

<div class="container d-flex float-none justify-content-center align-items-center align-content-center mx-auto">
            <select name="tipoMaterial" style="width:433px;padding-top:4px;height:47px;">
                <?php foreach ($retorno as $lista) { ?>
                            <option value="<?php echo $lista['idAluno'];?>"> <?php echo  
                            utf8_encode($lista['nomedoaluno']);}?> 
                             </option> 
            
        </select>
    </div>          
            </nav>
</body>
</html>