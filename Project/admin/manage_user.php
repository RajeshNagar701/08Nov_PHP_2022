
<?php
ob_start();
function fetch_data()
{
$output= '';
$connect= mysqli_connect("localhost","root","","my_car_rent");
$sel= "select * from customer";
$exe= mysqli_query($connect, $sel); 
while($fetch= mysqli_fetch_array($exe))
{
	$output .= '
<tr>
	<td>'.$fetch['uid'].'</td>
	<td>'.$fetch['name'].'</td>
    <td>'.$fetch['unm'].'</td>
	<td>'.$fetch['mobile'].'</td>
	<td>'.$fetch['gen'].'</td>
</tr>
			';
}
return $output;
}



include_once('header.php');


?>



    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Manage User</h4>
                <form action="" method="post">
					<input type="submit" name="gen_pdf" value="Generate Pdf File Of Data">
				</form>
            </div>

        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Manage User
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
											<th>Profile</th>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Gender</th>
											<th>Languages</th>
											<th>Edit</th>
											<th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
									<?php
									if(!empty($customer_arr))
									{
										foreach($customer_arr as $data)
										{
									?>
                                        <tr >
											<td><img src="../website/images/upload/customer/<?php echo $data->file?>" width="50px" height="50px"></td>
                                            <td><?php echo $data->uid?></td>
											<td><?php echo $data->name?></td>
											<td><?php echo $data->unm?></td>
											<td><?php echo $data->pass?></td>
											<td><?php echo $data->gen?></td>
											<td><?php echo $data->lag?></td>
                                            <td><a href="status?statusuidbtn=<?php echo $data->uid?>" class="btn btn-primary"><?php echo $data->status?></a></td>
											<td><a href="delete?deluidbtn=<?php echo $data->uid?>" class="btn btn-danger">Delete</a></td>
                                        </tr>
                                    <?php
										}
									}
									?>    
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            
            
    </div>
    </div>
 <?php
 include_once('footer.php');
 ?>

<?php
if(isset($_REQUEST['gen_pdf']))
{
	require_once('tcpdf1/tcpdf.php');
	//require __DIR__ . '/vendor/autoload.php';
	
	// create new PDF document
$pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->AddPage();
// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetTitle('Generate PDF file of data');

// set default header data
$pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont('helvetica');

// set margins
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);

$pdf->SetPrintHeader(false);
$pdf->SetPrintFooter(false);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, 10);
$pdf->SetFont('helvetica', '', 12);

$data = '';
$data .= ' 
			<h1 align="center"><img src="download.png" align="center" height="100px" width="100px"></h1>
			<h1 align="center"> Export Html table to PDF</h1>
			
			<h3 align="center"> </h3>
			<table border="1" callspacing="0" callpadding="5" style="color:yellow; background-color:red">
			
				<tr>
					<th width="20%">Id</th>
					<th width="20%">Name</th>
					<th width="20%">UserName</th>
					<th width="20%">Mobile</th>
					<th width="20%">Gender</th>
				</tr>
';
$data.= fetch_data();
$data.=	'</table>';

$pdf->writeHTML($data);
ob_end_clean();	
$pdf->Output("customer.pdf", "FI");
}
?> 