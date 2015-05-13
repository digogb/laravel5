<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model {

 	public $timestamps = false;
 
    public static function doCertificate( $certificate ){


		//$aluno = $name;
		//$curso = 'FUNDAMENTOS DO FRAMEWORK LARAVEL 5';
		//$dtInicial = '01/04/2015';
		//$dtFinal = '30/04/2015';
		//$carga = '5,3';

		echo($certificate->name);

		$pdf = new \fpdf\FPDF();
		$pdf->AddPage('L');
			
		$pdf->Image('images\moldura.jpg',1,0,295,210);	
		$pdf->Image('images\curso.jpg',20,15,-340);	

		$pdf->SetFont('helvetica','BI',20);	

		$pdf->Ln(15);
		$pdf->Cell(60);
		$pdf->SetFillColor(205,205,205);
		$pdf->Cell(200,20,'Certificado de Conclusao',1,1,'C',true);
		$pdf->Line(20,60,278,60);
		$pdf->Ln(30);


		$pdf->SetFont('helvetica','',12);
		$pdf->Cell(20);
		$pdf->MultiCell(230,20,'Certificamos que '.$certificate->name.' participou do Curso '.$certificate->course.' no periodo de '.$certificate->dtInicial.' a '.$certificate->dtFinal.' com carga horaria total de '.$certificate->carga.' horas.');

		$pdf->Ln(20);
		$pdf->Cell(260,10,'05 de Maio de 2015',0,1,'R');

		$pdf->Ln(5);	
		$pdf->Image('images\assinatura.jpg',50,140,-150);
		$pdf->Line(40,152,120,152);
		$pdf->Cell(45);
		$pdf->Cell(0,10,'Leonardo Moura Leitao',0,1);

		$pdf->Ln(19);
		$pdf->SetFontSize(10);
		$pdf->Line(20,180,278,180);
		$pdf->Cell(0,10,'Aulas de Programacao Ltda',0,1,'C');

        
        return $pdf;

    }

}
