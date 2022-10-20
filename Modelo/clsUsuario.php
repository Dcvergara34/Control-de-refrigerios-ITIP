<?php
require_once('Conexion.php');

class usuario extends Conexion{
    private $id;
    private $nombre;
    private $apellido;
    private $correo;
    private $telefono;
    private $direccion;
    private $password;
    private $rol;
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

	public function getDireccion(){
		return $this->direccion;
	}

	public function setDireccion($direccion){
		$this->direccion = $direccion;
	}

	public function getPassword(){
		return $this->password;
	}

	public function setPassword($password){
		$this->password = $password;
	}

	public function getRol(){
		return $this->rol;
	}

	public function setRol($rol){
		$this->rol = $rol;
	}

	public function getEstado(){
		return $this->estado;
	}

	public function setEstado($estado){
		$this->estado = $estado;
	}

public function login(){
	$consulta=$this->db->prepare("SELECT * from usuario where idUsuario=:id and passwordUsuario=:pas");
		$consulta->bindParam(':id',$this->id);
		$consulta->bindParam(':pas',$this->password);
		$consulta->execute();

		if ($consulta->rowCount()==1) {
			return true;
		}
		else {
			return false;
		}
}

	public function consultarTodos(){
		$consulta=$this->db->prepare("SELECT * FROM Usuario");
		$filas=null;
		$consulta->execute();
		while($resultado=$consulta->fetch()){
			$filas[]=$resultado;
		}
		return $filas;
	}

	public function consultaUsuario(){
		$consulta=$this->db->prepare("CALL consultaUsuario()");
		$filas=null;
		$consulta->execute();
		while($resultado=$consulta->fetch()){
			$filas[]=$resultado;
		}
		return $filas;
	}


    public function registroUsuario(){
        $consulta=$this->db->prepare("INSERT INTO usuario (idUsuario,nombreUsuario,apellidoUsuario,correoUsuario,telefonoUsuario,direccionUsuario,passwordUsuario,rolUsuario,estadoUsuario) VALUES (:idu, :nombreu, :apellidou, :correo, :telefono, :direccion, :pas, :rol, :estado)");
        $consulta->bindParam(':idu',$this->id);
        $consulta->bindParam(':nombreu',$this->nombre);
        $consulta->bindParam(':apellidou',$this->apellido);
        $consulta->bindParam(':correo',$this->correo);
        $consulta->bindParam(':telefono',$this->telefono);
        $consulta->bindParam(':direccion',$this->direccion);
        $consulta->bindParam(':pas',$this->password);
        $consulta->bindParam(':rol',$this->rol);
        $consulta->bindParam(':estado',$this->estado);


        if ($consulta->execute()){
            header('Location: ../Vistas/FormRegistroUsuario.php?mensaje=correcto');   
        }
        else {
            header('Location: ../Vistas/FormRegistroUsuario.php?mensaje=incorrecto');
        }
    }

	public function editarUsuario(){
 			
		$consulta=$this->db->prepare("UPDATE usuario set nombreUsuario=:nombreu,apellidoUsuario=:apellidou,correoUsuario=:correo,telefonoUsuario=:telefono,direccionUsuario=:direccion,passwordUsuario=:pas,rolUsuario=:rol,estadoUsuario=:estado  WHERE idUsuario=:idu");
		$consulta->bindParam(':idu',$this->id);
        $consulta->bindParam(':nombreu',$this->nombre);
        $consulta->bindParam(':apellidou',$this->apellido);
        $consulta->bindParam(':correo',$this->correo);
        $consulta->bindParam(':telefono',$this->telefono);
        $consulta->bindParam(':direccion',$this->direccion);
        $consulta->bindParam(':pas',$this->password);
        $consulta->bindParam(':rol',$this->rol);
        $consulta->bindParam(':estado',$this->estado);
		
		if($consulta->execute()){
			header('Location: ../Vistas/formEditarUsuario.php?mensaje=editarok');
		}else{
			header('Location: ../Vistas/formEditarUsuario.php?mensaje=editarerror');
		}
		
	}

	public function consultarPorCodigo(){
		$filas=null;
		$consulta=$this->db->prepare("SELECT nombreUsuario, apellidoUsuario, correoUsuario, telefonoUsuario, direccionUsuario, rolUsuario, estadoUsuario FROM usuario WHERE idUsuario=:id;");
		$consulta->bindParam(':id', $this->id);
		$consulta->execute();
		while($resultado=$consulta->fetch()){
			$filas[]=$resultado;
		}
		return $filas;
	}

	public function editarUsuarioTabla(){
		$consulta=$this->db->prepare("UPDATE usuario set nombreUsuario=:nombreu,apellidoUsuario=:apellidou,correoUsuario=:correo,telefonoUsuario=:telefono,direccionUsuario=:direccion,passwordUsuario=:pas,rolUsuario=:rol,estadoUsuario=:estado  WHERE idUsuario=:idu");
		$consulta->bindParam(':idu',$this->id);
        $consulta->bindParam(':nombreu',$this->nombre);
        $consulta->bindParam(':apellidou',$this->apellido);
        $consulta->bindParam(':correo',$this->correo);
        $consulta->bindParam(':telefono',$this->telefono);
        $consulta->bindParam(':direccion',$this->direccion);
        $consulta->bindParam(':pas',$this->password);
        $consulta->bindParam(':rol',$this->rol);
        $consulta->bindParam(':estado',$this->estado);

		if($consulta->execute()){
			header('Location: ../Vistas/formEditarUsuarioTabla.php?mensaje=editarok');
		}else{
			header('Location: ../Vistas/formEditarUsuarioTabla.php?mensaje=editarerror');
		}
	}

	public function eliminarUsuario(){
		$consulta=$this->db->prepare("CALL PrEliminarUsuario(:name)");
		$consulta->bindParam(':name',$this->nombre);
		if ($consulta->execute()) {
			header('Location: ../Vistas/formEliminarUsuario.php?mensaje=correcto');
		}else{
			header('Location: ../Vistas/formEliminarUsuario.php?mensaje=incorrecto');
		}


	}

	public function eliminarUsuarioTabla(){
		$consulta=$this->db->prepare("CALL PrEliminarUsuario(:name)");
		$consulta->bindParam(':name',$this->user);
		if ($consulta->execute()) {
			header('Location: ../Vista/formUsuario.php?mensaje=correcto');
		}else{
			header('Location: ../Vista/formUsuario.php?mensaje=incorrecto');
		}


}
}
?>