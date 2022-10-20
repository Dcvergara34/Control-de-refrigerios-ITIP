<?php
require_once('Conexion.php');

class Coordinador extends Conexion{
    private $id;
    private $nombre;
    private $apellido;
    private $correo;
    private $telefono;
    private $oficina;
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

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getApellido(){
		return $this->apellido;
	}

	public function setApellido($apellido){
		$this->apellido = $apellido;
	}

	public function getCorreo(){
		return $this->correo;
	}

	public function setCorreo($correo){
		$this->correo = $correo;
	}

	public function getTelefono(){
		return $this->telefono;
	}

	public function setTelefono($telefono){
		$this->telefono = $telefono;
	}

	public function getOficina(){
		return $this->oficina;
	}

	public function setOficina($oficina){
		$this->oficina = $oficina;
	}

    public function getEstado(){
		return $this->estado;
	}

	public function setEstado($estado){
		$this->estado = $estado;
	}



    public function registroCoordinador(){
        $consulta=$this->db->prepare("INSERT INTO Coordinador (idCoordinador,nombreCoordinador,apellidoCoordinador,correoCoordinador,telefonoCoordinador, oficinaCoordinador, estadoUsuario) VALUES (:idc, :nombrec, :apellidoc, :correo, :telefono, :oficina, :estado)");
        $consulta->bindParam(':idc',$this->id);
        $consulta->bindParam(':nombrec',$this->nombre);
        $consulta->bindParam(':apellidoc',$this->apellido);
        $consulta->bindParam(':correo',$this->correo);
        $consulta->bindParam(':telefono',$this->telefono);
        $consulta->bindParam(':oficina',$this->oficina);
        $consulta->bindParam(':estado',$this->estado);


        if ($consulta->execute()){
            header('Location: ../Vistas/FormRegistroCoordinador.php?mensaje=correcto');   
        }
        else {
            header('Location: ../Vistas/FormRegistroCoordinador.php?mensaje=incorrecto');
        }
    }

}

?>