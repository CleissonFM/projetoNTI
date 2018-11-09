<?php
class aluno{
	//private $idaluno;
	private $nomedoaluno;
	private $idAluno;
	private $email;
	private $cpf;
	private $enderecoaluno;
	private $cep;
	private $telefone;

	
	public function __construct($cpf,$enderecoaluno,$cep,$telefone,$email,$idAluno,$nomedoaluno){
		//this->idaluno=$idaluno;
		$this->cpf=$cpf;
		$this->enderecoaluno=$enderecoaluno;
		$this->cep=$cep;
		$this->telefone=$telefone;
		$this->nomedoaluno=$nomedoaluno;
		$this->idAluno=$idAluno;
		$this->email= $email;
	}
	//public function setidaluno($idaluno){
	//	      $this->idaluno = $idaluno;
	//	   }
	public function setidAluno($idAluno){
		      $this->idAluno = $idAluno;
		   }
	public function setnomedoaluno($nomedoaluno){
			$this->nomedoaluno=$nomedoaluno;
	}
	public function setemail($email){
			$this->email=$email;
	}
	public function setcpf($cpf){
			$this->cpf=$cpf;
	}
	public function setenderecoaluno($enderecoaluno){
			$this->enderecoaluno=$enderecoaluno;
	}
	public function setcep($cep){
			$this->cep=$cep;
	}
	public function settelefone($telefone){
			$this->telefone=$telefone;
	}
	//public function getidaluno(){
		 //   return ($this->idaluno);
		 //  }
	public function getidAluno(){
		      return ($this->idAluno);
		   }
	public function getnomedoaluno(){
			return ($this->nomedoaluno);
	}
	public function getemail(){
			return ($this->email);
	}
	public function getcpf(){
			return ($this->cpf);
	}
	public function getenderecoaluno(){
			return ($this->enderecoaluno);
	}
	public function getcep(){
			return ($this->cep);
	}
	public function gettelefone(){
			return ($this->telefone);
	}
}
?>