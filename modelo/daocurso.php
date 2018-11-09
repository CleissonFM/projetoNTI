<?php
require_once("curso.php");
class daocurso{
	
		private $conn;
		private $stmt;
		private $res;
		private $sql;
	public function __construct(){
			$usuario = "root";
		    $this->conn = new PDO("mysql:host=localhost;dbname=bdcurso","$usuario");
	}
	public function salvar($objcurso){
		//mudar o objeto
		      //Montar o comando SQL
			  $this->sql = "Insert into curso(idCurso,nomeCurso, data_curso,CH) values (:idcurso,:nomeCurso,:data_curso,:CH)";
			  //Criar um objeto para Preparo do Comando SQL
			  $this->stmt = $this->conn->prepare($this->sql);
			  //Unir ao comando SQL os dados informados na Tela do Usuário
			  $idcurso=$objcurso->getidcurso();
			  $nomeCurso=$objcurso->getnomeCurso();
			  $data_curso=$objcurso->getdata_curso();
			  $CH=$objcurso->getCH();
			  $this->stmt->bindParam(':idcurso',$idcurso);
			  $this->stmt->bindParam(':nomeCurso',$nomeCurso);
			  $this->stmt->bindParam(':data_curso',$data_curso);
			  $this->stmt->bindParam(':CH',$CH);
			  //Executar o comando SQL
			  $retorno = $this->stmt->execute();
			  return ($retorno);
		   }
		   public function buscarcurso(){
		   	$this->sql="select * from curso";
		   	$this->stmt = $this->conn->query($this->sql);
		   	$lista=$this->stmt->fetchALL();
		   	
		   	return $lista;
		   }	
		   	public function buscaridcurso($id){
		   		$this->sql="select * from curso where idCurso='{$id}'";
		   		$this->stmt=$this->conn->query($this->sql);
		   		$lista=$this->stmt->fetch();
		   		return $lista;
		   	}
		   	public function alterarDados($objnomeCurso){
		   		$this->sql="update nomeCurso set texto, linl where id=";
		   		$this->stmt=$this->conn->query($this->sql);
		   		$lista=$this->stmt->execute();
		   		return $lista;
		   	}
	
}
?>