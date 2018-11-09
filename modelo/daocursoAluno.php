<?php
require_once("cursoAluno.php");
class daocursoAluno{
	
		private $conn;
		private $stmt;
		private $res;
		private $sql;
	public function __construct(){
			$usuario = "root";
			$senha = "";
		    $this->conn = new PDO("mysql:host=localhost;dbname=bdcurso","$usuario","$senha");
		}
	public function salvar($objalunoCurso){
		//mudar o objeto
		      //Montar o comando SQL
			  $this->sql = "insert into aluno_curso (idCurso, idAluno) values ( :idCurso, :idAluno)";
			  //Criar um objeto para Preparo do Comando SQL
			  $this->stmt = $this->conn->prepare($this->sql);
			  //Unir ao comando SQL os dados informados na Tela do Usuário
			  $idCurso=$objalunoCurso->getidCurso();
			  $idAluno=$objalunoCurso->getidAluno();
			  
			   $this->stmt->bindParam(':idCurso',$idCurso);
			   $this->stmt->bindParam(':idAluno',$idAluno);
			   
			  //Executar o comando SQL
			  $retorno = $this->stmt->execute();
			  return $retorno;
		   }

}
?>