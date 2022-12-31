<?php

function fetch_data()
{
  $output='';
  include('../admin/db.php');
  if(isset($_GET['uid']))
  {
   $user=$_GET['uid'];
   $sname=$_GET['sname']; 
   $get_user_id = $mysqli->query("SELECT * FROM clients where email='$user'");
   $row = $get_user_id->fetch_assoc();
   $u_id = $row['id'];
     $result=$mysqli->query("SELECT  requested_services.id as id,requested_services.pickup_location as pickup_location,requested_services.total_cost as total_cost,payments.payment_date as payment_date,payments.transaction_id as transaction_id,services.service_name as service_name, services.service_status as service_status, services.cost as cost, services.expiry_date as expiry_date,requested_services.client_id as client_id,clients.firstname as firstname,clients.lastname as lastname,requested_services.subscription_status as subscription_status from requested_services join services  on services.service_name=requested_services.service_name join clients on clients.id=requested_services.client_id join payments on  payments.request_id=requested_services.id where requested_services.subscription_status!='not_subscribed' and  clients.id= '$u_id' and requested_services.service_name='$sname' order by services.id desc") or die($mysqli->error);
     
   
      while ($row=$result->fetch_assoc())
      {
       
      $output.=
  "
      
      <tr>
    
      <td>".$row['service_name']."</td>
     
      
      <td>".$row['total_cost']."</td>
     
      <td>".$row['transaction_id']."</td>
      
      </tr>
     
           ";
         
         

}}
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
;
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
if(isset($_GET['uid']))
  {
    include('../admin/db.php');
   $user=$_GET['uid'];
   $get_user_id = $mysqli->query("SELECT * FROM clients where email='$user'");
   $row2 = $get_user_id->fetch_assoc();
   $u_id = $row2['id'];
     $result=$mysqli->query("SELECT  requested_services.id as id,requested_services.pickup_location as pickup_location,requested_services.total_cost as total_cost,payments.payment_date as payment_date,payments.transaction_id as transaction_id,services.service_name as service_name, services.service_status as service_status, services.cost as cost, services.expiry_date as expiry_date,requested_services.client_id as client_id,clients.firstname as firstname,clients.lastname as lastname,requested_services.subscription_status as subscription_status from requested_services join services  on services.service_name=requested_services.service_name join clients on clients.id=requested_services.client_id join payments on  payments.request_id=requested_services.id where requested_services.subscription_status!='not_subscribed' and  clients.id= '$u_id'  order by services.id desc") or die($mysqli->error);
     $row=$result->fetch_assoc();
     $firstname=$row['firstname'];
     $lastname=$row['lastname'];
     $payment_date=$row['payment_date']; 
$content.="Email: $echo $user<br/> Firtname: $echo $firstname <br/>Lastname: $echo $lastname<br/> $echo $payment_date <br/><hr/>";

   
  }
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

<div class="table-responsive">
<table class="table table-bordered">
<tr>
<th>Service Name</th>

<th>Total Cost</th>
<th>Transaction ID</th>





</tr>

';
$content.=fetch_data();
$content.='</table>';
$pdf->writeHTML($content);
ob_end_clean();
$pdf->IncludeJS("print();");
$pdf->output('Client receipt.pdf','I');



// Print text using writeHTMLCell()
;


// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->writeHTML($content);

//============================================================+
// END OF FILE
//============================================================+