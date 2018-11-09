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
<form method="post" action="controle/controlealuno.php">
            </nav><label></label>
    <label>FAÇA O SEU CADASTRO</label>
                  <input class="form-control" type="text" name="nomedoaluno" placeholder="Nome do aluno" style="margin-left:24px;color:rgb(0,0,0);width:329px;"><label style="color:rgba(0,0,0,0.9);margin-left:10px;"></label>
                  <input class="form-control" type="text" name="idAluno" placeholder="idAluno do aluno" style="margin-left:24px;color:rgb(0,0,0);width:329px;"><label style="color:rgba(0,0,0,0.9);margin-left:10px;"></label>
                  <input class="form-control" type="email" name="email" placeholder="Email" style="width:330px;margin-left:24px;background-color:rgb(252,252,252);"><label style="margin-left:10px;color:rgb(8,8,8);"></label>
                  <input class="form-control" type="text" name="cpf" placeholder="cpf do aluno" style="margin-left:24px;color:rgb(0,0,0);width:329px;"><label style="color:rgba(0,0,0,0.9);margin-left:10px;"></label>
                  <input class="form-control" type="text" name="endereco" placeholder="endereco do aluno" style="margin-left:24px;color:rgb(0,0,0);width:329px;"><label style="color:rgba(0,0,0,0.9);margin-left:10px;"></label>
                  <input class="form-control" type="text" name="cep" placeholder="cep do aluno" style="margin-left:24px;color:rgb(0,0,0);width:329px;"><label style="color:rgba(0,0,0,0.9);margin-left:10px;"></label>
                  <input class="form-control" type="text" name="telefone" placeholder="telefone do aluno" style="margin-left:24px;color:rgb(0,0,0);width:329px;"><label style="color:rgba(0,0,0,0.9);margin-left:10px;"></label>

                
                <label style="margin-left:10px;color:rgb(6,6,6);"></label>
                <label style="margin-left:10px;color:rgb(7,7,7);"></label>
                    <label
                        style="color:rgb(7,7,7);margin-left:10px;"></label>
                        <button
                            class="btn btn-primary" type="submit" style="background-color:#000000;color:#fcf9f9;width:330px;margin-left:20px;padding:8px;padding-top:8px;margin-top:20px;border-color:#4a7059;">ENVIAR</button>
        </form>
            </nav>
</body>
</html>