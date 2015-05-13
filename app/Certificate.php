<?php namespace App;

setlocale(LC_ALL, '');

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Certificate extends Model {

 	public $timestamps = false;

	protected $dates = ['dt_inicial','dt_final']; 	
 
    public static function doCertificate( $certificate ){

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
		$pdf->MultiCell(230,20,'Certificamos que '.$certificate->name.' participou do '.$certificate->course.
					' no periodo de '.$certificate->dt_inicial->format('d-m-y').' a '.$certificate->dt_final->format('d-m-y').
					' com carga horaria total de '.$certificate->duration.' horas.');

		$pdf->Ln(20);
		$today = Carbon::today();
		$pdf->Cell(260,10,$today->format('d').' de '. $today->format('M').' de '. $today->format('Y'),0,1,'R');

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
