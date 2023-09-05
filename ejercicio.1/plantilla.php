<?php
require 'fpdf/fpdf.php';
class PDF extends FPDF
{
    function Header()
{
$this->image("logo.jpg",15,5,13,);//posicion de x y y alto ancho y alto
$this->setfont('arial','b',12);
$this->cell(30);
$this->cell(120,10,'Reporte alumnos',0,0,'C');
$this->cell(25,5,"Fecha:". date("d/m/y"),0,1,'C');
$this->Ln(10);
}

function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo(). '/{nb}',0,0,'C');
}
}

?>