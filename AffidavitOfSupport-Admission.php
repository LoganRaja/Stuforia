<?php
//error_reporting(E_ALL); ini_set('display_errors', 1); 

require('html2pdf.php');

$pdf=new PDF_HTML();
 require_once "config.php";   
			  mysql_select_db("A937473_stuforia", $con);
			  $id=$_REQUEST['id'];
              $templateType=$_REQUEST['templateType'];
              $name=$_REQUEST['name'];
			  $father_name=$_REQUEST['father_name'];
			  $address=$_REQUEST['address'];
			  $account_number=$_REQUEST['account_number'];
			  $father_age=$_REQUEST['father_age'];
			  $mother_age=$_REQUEST['mother_age'];
			  $mother_name=$_REQUEST['mother_name'];
$fileName=$id.'_'.$templateType;
$fileName=md5($fileName);
$fileName.=".pdf";

 if($templateType=="AOSA"){
	 
	 $text='
		<P>                                                           <B><U>AFFIDAVIT OF SUPPORT</U></B></P>

		<P> We, Mr.</SPAN><b>'.$father_name.'</b><SPAN> aged about </SPAN><b>'.$father_age.'</b><SPAN> years and Mrs.</SPAN><b>'.$mother_name.'</b><SPAN> wife of Mr.</SPAN><b>'.$father_name.'</b><SPAN> aged about </SPAN><b>'.$mother_age.'</b><SPAN> years both residing at</SPAN><b>'.$address.'</b><SPAN> hereby solemnly affirm and state as follows:</P>
		<P>          <IMG SRC="http://www.venbaventures.com/stuforia/profilepic/logo.png" HEIGHT="320" WIDTH="400"/></P>
		<P> 1. That our son Mr.</SPAN><b>'.$name.'</b><SPAN>  who is seeking admission in the University <b>{University Name}</b> , USA to do M.S <b>{Course Name}</b></P>
		<P> 2. That we hereby undertake to support him financially and will meet all his tuition, living and other expenses during his entire period of education in USA. We have sufficient cash savings by way of deposits in bank and also income to meet his expenses fully. We also own properties of substantial value. </P>
		<P> 3. We affirm that Mr. </SPAN><b>'.$name.'</b><SPAN> will not be a public charge in USA, and that he will return to India on completion of his studies. </P>

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
		
		$pdf->SetFont('Arial','',12);
			$pdf->AddPage();
			/*$pdf->WriteHTML('<P ALIGN="center">AFFIDAVIT OF SUPPORT</P>');*/
			if(ini_get('magic_quotes_gpc')=='1')
				$text=stripslashes($text);
			$pdf->WriteHTML($text);

		if (file_exists($fileName)) {
			unlink($fileName);
		}

		$pdf->Output('Stuforia_pdf/'.$fileName, 'F');
 }
 
if($templateType=="AOSV"){

 
$text='
<P>                                                           <B><U>AFFIDAVIT OF SUPPORT - VISA </U></B></P>

<P> We, Mr.</SPAN><b>'.$father_name.'</b><SPAN> aged about </SPAN><b>'.$father_age.'</b><SPAN> years and Mrs.</SPAN><b>'.$mother_name.'</b><SPAN> wife of Mr.</SPAN><b>'.$father_name.'</b><SPAN> aged about </SPAN><b>'.$mother_age.'</b><SPAN> years both residing at </SPAN><b>'.$address.'</b><SPAN> hereby solemnly affirm and state as follows:</P>
<P>          <IMG SRC="http://www.venbaventures.com/stuforia/profilepic/logo.png" HEIGHT="320" WIDTH="400"/></P>
<P> 1. That our son Mr.</SPAN><b>'.$name.'</b><SPAN>  who is approaching you for a Student Visa has been offered admission to the University <b>{UniversityName}</b> , USA to do M.S <b>{CourseName}</b></P>
<P> 2. That we hereby undertake to support him financially and will meet all his tuition, living and other expenses during his entire period of education in USA. We have sufficient cash savings by way of deposits in bank and also income to meet his expenses fully. We also own properties of substantial value. </P>
<P> 3. We affirm that Mr. </SPAN><b>'.$name.'</b><SPAN> will not be a public charge in USA, and that he will return to India on completion of his studies. </P>

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

$pdf->SetFont('Arial','',12);
			$pdf->AddPage();
			/*$pdf->WriteHTML('<P ALIGN="center">AFFIDAVIT OF SUPPORT</P>');*/
			if(ini_get('magic_quotes_gpc')=='1')
				$text=stripslashes($text);
			$pdf->WriteHTML($text);

		if (file_exists($fileName)) {
			unlink($fileName);
		}

		$pdf->Output('Stuforia_pdf/'.$fileName, 'F');
}

if($templateType=="FS"){

$text='
<P>                                                           <B><U><H1>BANK LETTER HEAD</H1></U></B></P>
<P></P>
<P></P>
<P>                                               <B><U><H4>TO WHOSOEVER IT MAY CONCERN</H4></U></B></P>
<P></P>
<P>          <IMG SRC="http://www.venbaventures.com/stuforia/profilepic/logo.png" HEIGHT="320" WIDTH="400"/></P>
<P></P>
<SPAN> This is to certify that Mr.</SPAN><b>'.$name.'</b><SPAN> S/O Mr.</SPAN><b>'.$father_name.'</b><SPAN>, Residing at </SPAN><b>'.$address.'</b><SPAN>  having a Savings Bank Account bearing no. </SPAN><b>'.$account_number.'</b><SPAN>  at the branch. The present balance in that account as on date is <b>{Rs.Amount in figures}</b> <b>{and amount in words}</b> and which is equivalent to US$ <b>{Amount in figures}</b> ( 1 USD = INR 62.00 ). This letter is issued at the request of the account holder.</P>
<P></P>
<P></P>
<P></P>
<P> Sr.Branch Manager. <P>
<P> <B>[ SEAL AND SIGN ]</B> </SPAN>
';

$pdf->SetFont('Arial','',12);
			$pdf->AddPage();
			/*$pdf->WriteHTML('<P ALIGN="center">AFFIDAVIT OF SUPPORT</P>');*/
			if(ini_get('magic_quotes_gpc')=='1')
				$text=stripslashes($text);
			$pdf->WriteHTML($text);

		if (file_exists($fileName)) {
			unlink($fileName);
		}

		$pdf->Output('Stuforia_pdf/'.$fileName, 'F');
		
}
echo $fileName;

?>