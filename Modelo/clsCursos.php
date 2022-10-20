<?php
require_once('Conexion.php');

class Cursos extends Conexion{
	private $id;
    private $sede; 
    private $cantidad;
    private $director;
    private $estado;

    public function __construct(){
		$this->db=parent::__construct();
	}

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

    public function getSede(){
		return $this->sede;
	}

	public function setSede($sede){
		$this->sede = $sede;
	}

	public function getCantidad(){
		return $this->cantidad;
	}

	public function setCantidad($cantidad){
		$this->cantidad = $cantidad;
	}

	public function getDirector(){
		return $this->director;
	}

	public function setDirector($director){
		$this->director = $director;
	}

	public function getEstado(){
		return $this->estado;
	}

	public function setEstado($estado){
		$this->estado = $estado;
	}

    public function registroCursos(){
        $consulta=$this->db->prepare("INSERT INTO Curso (idCurso,sedeCurso,cantidadAlumnoscurso,directorCurso,estadoCurso) VALUES (:idc, :sedec, :cantidadc, :directorc, :estadoc)");
		$consulta->bindParam(':idc',$this->id);
        $consulta->bindParam(':sedec',$this->sede);
        $consulta->bindParam(':cantidadc',$this->cantidad);
        $consulta->bindParam(':directorc',$this->director);
		$consulta->bindParam(':estadoc',$this->estado);

		if ($consulta->execute()){
            header('Location: ../Vistas/FormRegistroCursos.php?mensaje=correcto');   
        }
        else {
            header('Location: ../Vistas/FormRegistroCursos.php?mensaje=incorrecto');
        }

    }
}
?>
