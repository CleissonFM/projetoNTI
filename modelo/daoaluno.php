<?php
require_once("aluno.php");
class daoaluno{
	
		private $conn;
		private $stmt;
		private $res;
		private $sql;
	public function __construct(){
			$usuario = "root";
			$senha = "";
		    $this->conn = new PDO("mysql:host=localhost;dbname=bdcurso","$usuario","$senha");
		}
	public function salvar($objaluno){
		//mudar o objeto
		      //Montar o comando SQL
			  $this->sql = "insert into aluno (cpf, enderecoaluno, cep, telefone,email,idAluno,nomedoaluno) values ( :cpf, :enderecoaluno, :cep, :telefone,:email,:idAluno,:nomedoaluno)";
			  //Criar um objeto para Preparo do Comando SQL
			  $this->stmt = $this->conn->prepare($this->sql);
			  //Unir ao comando SQL os dados informados na Tela do Usuário
			  $cpf=$objaluno->getcpf();
			  $enderecoaluno=$objaluno->getenderecoaluno();
			  $cep=$objaluno->getcep();
			  $telefone=$objaluno->gettelefone();
			  $email=$objaluno->getemail();
			  $idAluno=$objaluno->getidAluno();
			  $nomedoaluno=$objaluno->getnomedoaluno();
			   $this->stmt->bindParam(':cpf',$cpf);
			   $this->stmt->bindParam(':enderecoaluno',$enderecoaluno);
			   $this->stmt->bindParam(':cep',$cep);
			   $this->stmt->bindParam(':telefone',$telefone);
		       $this->stmt->bindParam(':email',$email);
			   $this->stmt->bindParam(':idAluno',$idAluno);
			   $this->stmt->bindParam(':nomedoaluno',$nomedoaluno);
			  //Executar o comando SQL
			  $retorno = $this->stmt->execute();
			  return $retorno;
		   }

		   public function buscaraluno(){
		   	$this->sql="select * from aluno";
		   	$this->stmt = $this->conn->query($this->sql);
		   	$lista=$this->stmt->fetchALL();
		   	
		   	return $lista;
		   }	
		   	public function buscaridAluno($id){
		   		$this->sql="select * from aluno where idAluno='{$id}'";
		   		$this->stmt=$this->conn->query($this->sql);
		   		$lista=$this->stmt->fetch();
		   		return $lista;
		   	}
		   	public function alterarDados($objnomedoaluno){
		   		$this->sql="update nomedoaluno set texto, linl where id=";
		   		$this->stmt=$this->conn->query($this->sql);
		   		$lista=$this->stmt->execute();
		   		return $lista;
		   	}  	
}
?>