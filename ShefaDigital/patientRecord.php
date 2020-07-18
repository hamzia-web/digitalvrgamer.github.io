<!DOCTYPE html>
<html>

<head>
	<title> Patient Record</title>
</head>

<body>
<?php include 'header.php'; ?>
<?php include 'export.php'; ?>
	
    <!--table starts -->
	<h2 class="text-center my-2">Patient Record</h2>
	<center><img src="images/line.png"></center>
	<table id="example" class="display nowrap mt-2" style="width:100%">
		<thead>
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
		</thead>
		<tbody>
			<?php foreach ($patientData as $patient) { ?>
			<tr>
				<td><?php echo $patient['sno']; ?></td>
				<td><?php echo $patient['patientName']; ?></td>
				<td><?php echo $patient['date']; ?></td>
				<td><?php echo $patient['partsOf']; ?></td>
				<td><?php echo $patient['refByDoctor']; ?></td>
				<td><?php echo $patient['amount']; ?></td>
				<td><?php echo $patient['due']; ?></td>
				<td><?php echo $patient['report']; ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table> <br><br><br><br><br><br><br><br>
	<!--table ends -->

	<!-- Footer -->
	<footer class="page-footer font-medium teal pt-4">
	<div class="container text-justify text-md-justify">
		<div class="row">   <!-- Grid row -->
			<div class="col-md-6 mt-md-0 mt-3">   <!-- Grid column -->
				<h5 class="text-uppercase font-weight-bold ">Address:</h5>
				<p>Near Dr. Gargi Sinha Clinic</p>
				<p>Hospital Road</p>
				<p>Madhubani, Bihar</p>
				<p>Pin- 847212</p>
			</div>

		<hr class="clearfix w-100 d-md-none pb-3">

		<div class="col-md-6 mb-md-0 mb-3"> <!-- Grid column -->
			<h5 class="text-uppercase font-weight-bold">About Us</h5>
			<p><ul class="navbar-nav ml-auto">
				<li class="nav-item">
						<a class="nav-link" href="services.php">Services</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="patientForm.php">Patient Form <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="patientRecord.php">Patient Record</a>
					</li>
				</ul></p>
		</div>     <!-- Grid column -->
		</div>  <!-- Grid row -->
	</div>
	<!-- Footer Text -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="index.php">Shefa Digital X-Ray</a>
    </div>
   </footer>

    <!-- js files for Datatables-->
	<script src="js/datatableJs/jquery-3.5.1.js"></script>
	<!-- <script src="js/datatableJs/datatables.min.js"></script> --> 
	<script src="js/datatableJs/jquery.dataTables.min.js"></script>
	<script src="js/datatableJs/dataTables.buttons.min.js"></script>
	<script src="js/datatableJs/buttons.flash.min.js"></script>
	<script src="js/datatableJs/jszip.min.js"></script>
	<script src="js/datatableJs/buttons.html5.min.js"></script>
	<script src="js/datatableJs/buttons.print.min.js"></script>
	<script src="js/datatableJs/pdfmake.min.js"></script>
	<script src="js/datatableJs/vfs_fonts.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function () {
			$('#example').dataTable({
				dom: 'Bfrtip',
				buttons: [
					'excel', 'pdf', 'copy', 'print'
				]
			});
		});
	</script>

</body>
</html>

