<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export To Excel</title>
</head>
<body>
 
<!-- Including Header-->
<?php include 'header.php'; ?>   
<?php include 'export.php'; ?> 

        <!-- Export To Excel and PDF Button start-->
        <div class="btn-group pull-right mt-4">	
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">					
				<button type="submit" id="dataExport" name="dataExport" value="Export to excel" class="btn btn-info">Export To Excel</button>
			</form>
        </div>	
        
        <div class="btn-group pull-right mt-4">	
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">					
				<button type="submit" id="dataExport" name="dataExportPdf" value="Export to excel" class="btn btn-info">Export To Pdf</button>
			</form>
		</div>
    <!-- Export To Excel and PDF Button end-->

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
		<tbody>
			<?php foreach ($developersData as $developer) { ?>
			   <tr>
			   <td><?php echo $developer['sno']; ?></td>
			   <td><?php echo $developer['patientName']; ?></td>
			   <td><?php echo $developer['date']; ?></td>  
			   <td><?php echo $developer['partsOf']; ?></td>			   
			   <td><?php echo $developer['refByDoctor']; ?></td>
               <td><?php echo $developer['amount']; ?></td>   
               <td><?php echo $developer['due']; ?></td>   
               <td><?php echo $developer['report']; ?></td>  
			   </tr>
            <?php } ?>
		</tbody>
    </table>		
    </div>
<div>
    <button name="create_excel" id="create_excel" class="btn btn-success">Export To Excel</button>
</div>

<div>
    <button name="create_pdf" id="create_pdf" class="btn btn-success">Export To PDF</button>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br>

<!-- Including Footer-->
<?php include 'footer.php'; ?>   

</body>
</html>