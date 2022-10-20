<?php

require('../Reportes/fpdf.php');
require_once('../Modelo/Conexion.php');


class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../Aplicaciones/Imagenes/Logo.jpg',8,6,20);
    // Arial bold 15
    $this->SetFont('Helvetica','B',10);
    // Movernos a la derecha
    $this->Cell(120);
    // Título
    $this->Cell(70,10,'Listado de Usuarios',0,0,'C');
    // Salto de línea
    $this->Ln(20);

	$this->cell(20,6,'Codigo', 1,0,'c',0);
	$this->cell(30,6,'Nombre', 1,0,'c',0);
	$this->cell(30,6,'Apellido', 1,0,'c',0);
    $this->cell(40,6,'Correo', 1,0,'c',0);
    $this->cell(30,6,'Telefono', 1,1,'c',0);

}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

///$consulta="SELECT * FROM usuario";
//$resultado=$connect->query($consulta);

require_once('../Modelo/clsUsuario.php');
			$objeto=new Usuario();
			$filas=$objeto->consultarTodos();
			if($filas!=null){
			foreach ($filas as $fila) {

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',11);

// anexo lineas de codigo
//while ($fila=$filas->fetch_assoc()){
	$pdf->cell(20,6,$fila['idUsuario'], 1,0,'c',0);
	$pdf->cell(30,6,$fila['nombreUsuario'], 1,0,'c',0);
	$pdf->cell(30,6,$fila['apellidoUsuario'], 1,0,'c',0);
    $pdf->cell(40,6,$fila['correoUsuario'], 1,0,'c',0);
    $pdf->cell(30,6,$fila['telefonoUsuario'], 1,1,'c',0);

//}
			

$pdf->Output();
		}
	}
?>
