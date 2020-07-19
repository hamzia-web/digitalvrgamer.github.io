<?php include 'connection.php';

require_once 'dompdf/lib/html5lib/Parser.php';
require_once 'dompdf/lib/php-font-lib/src/FontLib/Autoloader.php';
require_once 'dompdf/lib/php-svg-lib/src/autoload.php';
require_once 'dompdf/src/Autoloader.php';
Dompdf\Autoloader::register();

use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$output = '';
$sqlQuery = 'SELECT * FROM shefadigitalxray';
($resultSet = mysqli_query($connection, $sqlQuery)) or
    die('database error:' . mysqli_error($conn));
$developersData = [];
while ($developer = mysqli_fetch_assoc($resultSet)) {
    $developersData[] = $developer;
}
$output .= '<!DOCTYPE html>
<!DOCTYPE html>
<html>
	<head>
		<title>Print</title>
		<style type="text/css">
			body{font-family:calibri;font-size: 11px; counter-reset: page;}
			table, th, td {border: 1px solid black;border-collapse: collapse; }
			th{background: #cccccc;}
			th, td {padding: 3px;text-align: left; }
			.table2 tr td {margin-bottom:30px;border-right: 1px solid #000;font-size: 12px;padding: 2px 5px;}
		</style>
	</head>
<body>
<p class="h1 mb-4 text-center mt-4">Patient Record</p>
<div class="table-responsive" id="employee_table">
<table id="mytable" class="table table-striped table-bordered ">
		<tr>
			<th><b>S.No.</b></th>
			<th><b>Patient Name</b></th>
			<th><b>Date</b></th>
			<th><b>Part Of</b></th>			
			<th><b>Referred by Doctor</b></th>
            <th><b>Amount</b></th>
            <th><b>Due</b></th>
            <th><b>Report</b></th>
		</tr>
		<tbody>';
foreach ($developersData as $developer) {
    $output .=
        ' <tr>
			   <td>' .
        $developer['sno'] .
        '</td>
			   <td>' .
        $developer['patientName'] .
        '</td>
               <td>' .
        $developer['date'] .
        ' </td>  
               <td>' .
        $developer['partsOf'] .
        ' </td>  
               <td>' .
        $developer['refByDoctor'] .
        ' </td>  
               <td>' .
        $developer['amount'] .
        ' </td>  
               <td>' .
        $developer['due'] .
        ' </td>  
               <td>' .
        $developer['report'] .
        ' </td>  
			   </tr>';
}
$output .= '	</tbody>
    </table>		
    </div>
	</body>
</html>';

$dompdf->loadHtml($output);

$dompdf->setPaper('A4', '');
$dompdf->render();
$dompdf->stream('report.pdf');
?>
