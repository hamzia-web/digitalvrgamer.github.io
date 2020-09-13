<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
</head>

<body>
<?php
include 'header.php';
include 'export.php';
?>   

<!-- Patient form start -->
<form class="text-center border border-light p-5 patientForm" method="POST"
    autocomplete="off">

    <?php
    include 'connection.php';

    $sno = $_GET['sno'];
    $sqlQuery = "SELECT * FROM shefadigitalxray where sno='$sno' ";
    $query = mysqli_query($connection, $sqlQuery);
    $patient = mysqli_fetch_assoc($query);

    if (isset($_POST['submit'])) {
        $patientName = $_POST['patientName'];
        $date = $_POST['date'];
        $partsOf = $_POST['partsOf'];
        $refByDoctor = $_POST['refByDoctor'];
        $amount = $_POST['amount'];
        $due = $_POST['due'];
        $report = $_POST['report'];

        $sno = $_GET['sno'];
        $updateQuery = "UPDATE shefadigitalxray set sno=$sno, patientName='$patientName', date='$date', partsOf='$partsOf', refByDoctor='$refByDoctor', amount='$amount', due='$due', report='$report'  where sno=$sno";
        $result = mysqli_query($connection, $updateQuery);

        if ($result) { ?>
        <script>
           <?php header('location:patientRecord.php'); ?>
        </script>
        <?php } else { ?>
            <script>
                alert("Data not updated successfully");
            </script>
       <?php }
    }
    ?>

    <div class="contactUsForm">
        <article>
            <p class="h1">Update Record</p>
        </article>
        <center>
            <figure>
                <img src="images/line.png" alt="underline">
            </figure>
        </center>

        <label>Patient Name <span class="required">*</span></label>
        <input type="text" name="patientName" class="form-control mb-4" required placeholder="Name"
            oninvalid="this.setCustomValidity('Please enter valid name')" oninput="this.setCustomValidity('')"
            autofocus value="<?php echo $patient['patientName']; ?>">

        <label>Date <span class="required">*</span></label>
        <input type="date" name="date" class="form-control mb-4 customDate" required placeholder="dd-mm-yyyy"
            oninvalid="this.setCustomValidity('Please select valid date')" oninput="this.setCustomValidity('')"
            autofocus value="<?php echo $patient['date']; ?>">

        <label>Part of X-Ray<span class="required">*</span></label>
        <select class="browser-default custom-select mb-4" name="partsOf" required>
            <option value="Chest PA" <?php echo $patient['partsOf'] ==
            'Chest PA'
                ? 'selected'
                : ''; ?> > Chest PA</option>
            <option value="Dental" <?php echo $patient['partsOf'] == 'Dental'
                ? 'selected'
                : ''; ?> >Dental</option>
            <option value="Nosal" <?php echo $patient['partsOf'] == 'Nosal'
                ? 'selected'
                : ''; ?> >Nosal</option>
            <option value="Leg" <?php echo $patient['partsOf'] == 'Leg'
                ? 'selected'
                : ''; ?> >Leg</option>
        </select> <br>

        <label>Referred by Doctor<span class="required">*</span></label>
        <select required class="browser-default custom-select mb-4" name="refByDoctor">
            <option value="D.S.Mishra" <?php echo $patient['refByDoctor'] ==
            'D.S.Mishra'
                ? 'selected'
                : ''; ?> >D.S.Mishra</option>
            <option value="A.K.Jha" <?php echo $patient['refByDoctor'] ==
            'A.K.Jha'
                ? 'selected'
                : ''; ?> >A.K.Jha</option>
            <option value="Hospital" <?php echo $patient['refByDoctor'] ==
            'Hospital'
                ? 'selected'
                : ''; ?> >Hospital</option>
            <option value="Self" <?php echo $patient['refByDoctor'] == 'Self'
                ? 'selected'
                : ''; ?> >Self</option>
        </select>

        <label>Amount<span class="required">*</span></label>
        <input type="number" name="amount" class="form-control mb-4" min="0" step=".01" required  
            oninvalid="this.setCustomValidity('Please enter valid amount')" oninput="this.setCustomValidity('')"
            autofocus  data-toggle="tooltip" data-placement="top" title="" 
            data-original-title="Please enter only number or decimal number" 
            value="<?php echo $patient['amount']; ?>">

        <label>Due</label>
        <input type="number" name="due" class="form-control" min="0" step=".01" data-toggle="tooltip" data-placement="top" title="" 
        data-original-title="Please enter only number or decimal number" 
        value="<?php echo $patient['due']; ?>"><br>
        
        <label>Report<span class="required">*</span></label>
        <select class="browser-default custom-select" name="report" required>
            <option value="Yes" <?php echo $patient['report'] == 'Yes'
                ? 'selected'
                : ''; ?> >Yes</option>
            <option value="No" <?php echo $patient['report'] == 'No'
                ? 'selected'
                : ''; ?> >No</option>    
        </select>

        <button class="btn btn-default btn-block js-btn-submit mt-4" type="submit" name="submit">Update</button><br>
    </div>
    
</form><!-- Patient form ends -->

<?php include 'footer.php';
