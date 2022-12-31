<?php

function fetch_data()
{
  $output='';
  include('../admin/db.php');

   $result=$mysqli->query("SELECT  clients.firstname as firstname,clients.lastname as lastname, payments.id as payment_id,payments.transaction_id as transaction_id,payments.amount as amount_paid,payments.payment_date as payment_date,payments.payment_status as payment_status,finance_manager.email as finance_manager_email  from payments  join clients on clients.id=payments.userid join finance_manager on finance_manager.id=payments.finance_manager_id where payments.payment_status!='pending' order by payments.id desc") or die($mysqli->error);
     
   
      while ($row=$result->fetch_assoc())
      {
      $output.=
  "
      
      <tr>
    
      <td>".$row['firstname']."</td>
      <td>".$row['lastname']."</td>
      <td>".$row['transaction_id']."</td>
      <td>".$row['amount_paid']."</td>
      <td>".$row['payment_date']."</td>
      <td>".$row['payment_status']."</td>
      <td>".$row['finance_manager_email']."</td>
      </tr>
     
           ";

}
return $output;
}
include('../../library/tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nur');
$pdf->SetTitle('Clients receipt');
$pdf->SetSubject('TCPDF ');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData('', PDF_HEADER_LOGO_WIDTH, '', '', array(0,64,255), array(0,64,128));
$pdf->setFooterData(array(0,64,0), array(0,64,128));

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('helvetica', '', 14, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

// Set some content to print
$content.='

<p align="Right">Majengo Garbage LTD<br/>P.O.BOX 1234 <br>Nairobi<br/>Majengogarbage.co.ke<br/>0711223344</p>';

  $content.='
<style>
table
{
border-collapse:collapse;

}
th
{
  
  border-bottom:1px solid #888;
  font-weight:bold
}
tr
{
  border:1px solid #888;
  
}
table tr th
{
 
  
  font-weight:bold; 
}

</style>

';


$content.='
<hr/>
<div class="table-responsive">
<table class="table table-bordered">
<tr>
<th>Client Name</th>
<th>ClientLast Name</th>
<th>Transaction ID</th>
<th>Total Cost</th>
<th>Payment Date</th>
<th>Processed By</th>





</tr>

';
$content.=fetch_data();
$content.='</table>';
$pdf->writeHTML($content);
ob_end_clean();
$pdf->IncludeJS("print();");
$pdf->output('payment receipt.pdf','I');



// Print text using writeHTMLCell()
;


// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->writeHTML($content);

//============================================================+
// END OF FILE
//============================================================+