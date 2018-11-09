<?php
class cursoAluno{
	//private $idaluno;
	private $idCurso;
	private $idAluno;

	
	public function __construct($idCurso,$idAluno){
		//this->idaluno=$idaluno;
		$this->idCurso=$idCurso;
		$this->idAluno=$idAluno;

		
	}
	//set
	public function setidCurso($idCurso){
		$this->idCurso=$idCurso;
	}
	public function setidAluno($idAluno){
		      $this->idAluno = $idAluno;
		   }
	//get

	public function getidCurso(){
		return ($this->idCurso);
	}
	public function getidAluno(){
		      return ($this->idAluno);
		   }
	
}
?>