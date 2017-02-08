<<<<<<< HEAD
<?php
error_reporting(E_ALL); ini_set('display_errors', 1); 

require('html2pdf.php');

$pdf=new PDF_HTML();
 require_once "config.php";   

	 $text='
		<P>                                                           <B><U>AFFIDAVIT OF SUPPORT</U></B></P>

		<P> We, Mr.<b>{FatherName}</b> aged about <b>{age}</b> years and Mrs.<b>{MotherName}</b> wife of Mr.<b>{FatherName}</b> aged about <b>{age}</b> years both residing at <b>{address}</b> hereby solemnly affirm and state as follows:</P>
		<P></P>
		<P> 1. That our son Mr.<b>{StudentName}</b>  who is seeking admission in the University <b>{UniversityName}</b> , USA to do M.S <b>{CourseName}</b></P>
		<P> 2. That we hereby undertake to support him financially and will meet all his tuition, living and other expenses during his entire period of education in USA. We have sufficient cash savings by way of deposits in bank and also income to meet his expenses fully. We also own properties of substantial value. </P>
		<P> 3. We affirm that Mr. <b>{StudentName}</b> will not be a public charge in USA, and that he will return to India on completion of his studies. </P>

		<P></P>
		<P></P>
		<P></P>
		<P></P>
		<P></P>
		<P></P>

		<P> ____________ (Father)</P>
		<P> ____________ (Mother)</P>
		<P> Before me <P>
		<P> Signature and Seal of Notary Public</P>
		';
		
		$watermark = new PDFWatermark('Stuforia_pdf/pr_1.PNG'); 
		
		$watermark->setPosition('center');
		
		$pdf->SetFont('Arial','',12);
			$pdf->AddPage();
			/*$pdf->WriteHTML('<P ALIGN="center">AFFIDAVIT OF SUPPORT</P>');*/
			if(ini_get('magic_quotes_gpc')=='1')
				$text=stripslashes($text);
			$pdf->WriteHTML($text);

		if (file_exists("new.pdf")) {
			unlink("new.pdf");
		}

		$pdf->Output('Stuforia_pdf/new.pdf', 'F');
 

=======
<?php
error_reporting(E_ALL); ini_set('display_errors', 1); 

require('html2pdf.php');

$pdf=new PDF_HTML();
 require_once "config.php";   

	 $text='
		<P>                                                           <B><U>AFFIDAVIT OF SUPPORT</U></B></P>

		<P> We, Mr.<b>{FatherName}</b> aged about <b>{age}</b> years and Mrs.<b>{MotherName}</b> wife of Mr.<b>{FatherName}</b> aged about <b>{age}</b> years both residing at <b>{address}</b> hereby solemnly affirm and state as follows:</P>
		<P></P>
		<P> 1. That our son Mr.<b>{StudentName}</b>  who is seeking admission in the University <b>{UniversityName}</b> , USA to do M.S <b>{CourseName}</b></P>
		<P> 2. That we hereby undertake to support him financially and will meet all his tuition, living and other expenses during his entire period of education in USA. We have sufficient cash savings by way of deposits in bank and also income to meet his expenses fully. We also own properties of substantial value. </P>
		<P> 3. We affirm that Mr. <b>{StudentName}</b> will not be a public charge in USA, and that he will return to India on completion of his studies. </P>

		<P></P>
		<P></P>
		<P></P>
		<P></P>
		<P></P>
		<P></P>

		<P> ____________ (Father)</P>
		<P> ____________ (Mother)</P>
		<P> Before me <P>
		<P> Signature and Seal of Notary Public</P>
		';
		
		$watermark = new PDFWatermark('Stuforia_pdf/pr_1.PNG'); 
		
		$watermark->setPosition('center');
		
		$pdf->SetFont('Arial','',12);
			$pdf->AddPage();
			/*$pdf->WriteHTML('<P ALIGN="center">AFFIDAVIT OF SUPPORT</P>');*/
			if(ini_get('magic_quotes_gpc')=='1')
				$text=stripslashes($text);
			$pdf->WriteHTML($text);

		if (file_exists("new.pdf")) {
			unlink("new.pdf");
		}

		$pdf->Output('Stuforia_pdf/new.pdf', 'F');
 

>>>>>>> origin/master
?>