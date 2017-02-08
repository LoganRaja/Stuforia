<?php
//error_reporting(E_ALL); ini_set('display_errors', 1); 

require('html2pdf.php');

$pdf=new PDF_HTML();

 
	 $text='
		<HTML>
		<BODY IMG SRC ="http://www.gettyimages.in/gi-resources/images/Homepage/Category-Creative/UK/UK_Creative_462809583.jpg">
		<P>                                                           <B><U>AFFIDAVIT OF SUPPORT</U></B></P>
		
		<P> We, Mr.</SPAN><b>father name</b><SPAN>aged about</SPAN><b>father age</b><SPAN> years and Mrs.</SPAN><b>mother name</b><SPAN> wife of Mr.</SPAN><b>'.$father_name.'</b><SPAN> aged about </SPAN><b>'.$mother_age.'</b><SPAN> years both residing at</SPAN><b>'.$address.'</b><SPAN> hereby solemnly affirm and state as follows:</P>
		<P>                                                                 <IMG SRC="http://www.venbaventures.com/stuforia/profilepic/logo.png" HEIGHT="80" WIDTH="100"/></b></P>
		<P> 1. That our son Mr.</SPAN><b> name</b><SPAN>  who is seeking admission in the University <b>{University Name}</b> ,  USA to do M.S <b>{Course Name}</P>
		<P> 2. That we hereby undertake to support him financially and will meet all his tuition, living and other expenses during his entire period of education in USA. We have sufficient cash savings by way of deposits in bank and also income to meet his expenses fully. We also own properties of substantial value. </P>
		<P> 3. We affirm that Mr. </SPAN><b>name</b><SPAN> will not be a public charge in USA, and that he will return to India on completion of his studies. </P>

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
		</BODY>
		</HTML>
		';
		
		$text1='<P></P>';
		
		//$pdf->writeHTML("<img src=default.jpg  alt="This is my logo" width="100" height="200" >"  );
		
		$pdf->SetFont('Arial','',12);
			$pdf->AddPage();
			/*$pdf->WriteHTML('<P ALIGN="center">AFFIDAVIT OF SUPPORT</P>');*/
			if(ini_get('magic_quotes_gpc')=='1')
				$text=stripslashes($text);
			$pdf->WriteHTML($text);

		if (file_exists('new1.pdf')) {
			unlink('new1.pdf');
		}

		$pdf->Output('Stuforia_pdf/new1.pdf', 'F');
 
?>

