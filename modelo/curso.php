<?php
class curso{
	//private $idcurso;
	private $idcurso;
	private $nomeCurso;
	private $data_curso;
	private $CH;
	public function __construct($idcurso,$nomeCurso,$data_curso,$CH){
		//this->idDoador=$idDoador;
		$this->idcurso=$idcurso;
		$this->nomeCurso=$nomeCurso;
		$this->data_curso= $data_curso;
		$this->CH=$CH;
	}
	//public function setidcurso($idcurso){
	//	      $this->idcurso = $idcurso;
	//	   }
	public function setidcurso($idcurso){
		      $this->idcurso = $idcurso;
		   }
	public function setnomeCurso($nomeCurso){
			$this->nomeCurso=$nomeCurso;
	}
	public function setdata_curso($data_curso){
			$this->date_curso=$data_curso;
	}
	public function setCH($CH){
			$this->CH=$CH;
	}
	//public function getidcurso(){
		 //   return ($this->idcurso);
		 //  }
	public function getidcurso(){
		      return ($this->idcurso);
		   }
	public function getnomeCurso(){
			return ($this->nomeCurso);
	}
	public function getdata_curso(){
			return ($this->data_curso);
	}
	public function getCH(){
			return ($this->CH);
	}
}
?>