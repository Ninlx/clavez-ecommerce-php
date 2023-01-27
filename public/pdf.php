<?php
    // configuration
    require("../includes/config.php"); 
    require("../includes/fpdf181/fpdf.php"); 
	
	$routes = query("SELECT * FROM route");
	$pdf = new FPDF();
				$pdf->AddPage();
				$pdf->SetFont('Arial','',12);
				$pdf->Cell(70,7, 'VILLASENOR TRUCKING SERVICE');
				$pdf->Ln();
				$pdf->SetFont('Arial','',8);
				$pdf->Cell(70,7, 'Generated: ' . date("m-d-Y"));
				$pdf->Ln(10);
				
				$pdf->SetFont('Arial','',8);
				// Header
				$pdf->Cell(20,7, 'truck_id',1);
				$pdf->Cell(20,7, 'driver_id',1);
				$pdf->Cell(40,7, 'destination',1);
				$pdf->Cell(20,7, 'dateleft',1);
				$pdf->Cell(20,7, 'timeleft',1);
				$pdf->Cell(20,7, 'datearrival',1);
				$pdf->Cell(20,7, 'timearrival',1);
				$pdf->Cell(20,7, 'status',1);
				
				$pdf->Ln();
				
				// Data
				foreach($routes as $col) {
					$pdf->Cell(20,6,$col["truck_id"],1);
					$pdf->Cell(20,6,$col["driver_id"],1);
					$pdf->Cell(40,6,$col["destination"],1);
					$pdf->Cell(20,6,$col["dateleft"],1);
					$pdf->Cell(20,6,$col["timeleft"],1);
					$pdf->Cell(20,6,$col["datearrival"],1);
					$pdf->Cell(20,6,$col["timearrival"],1);
					$pdf->Cell(20,6,$col["status"],1);
					
					

					$pdf->Ln();
				}
				
				$pdf->Output('D');

    
    
  

?>
