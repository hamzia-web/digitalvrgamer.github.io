<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Form</title>
</head>

<body>
<!-- Including header -->
<?php include 'header.php'; ?>   

    <!-- Patient form start -->
    <form class="text-center border border-light p-5 patientForm" action="confirmation.php" method="POST"
        autocomplete="off">

        <div class="contactUsForm">
            <p class="h1 mb-4">Patient Form</p>

            <label>Patient Name <span class="required">*</span></label>
            <input type="text" name="patientName" class="form-control mb-4" required placeholder="Name"
                oninvalid="this.setCustomValidity('Please enter valid name')" oninput="this.setCustomValidity('')"
                autofocus>

            <label>Date <span class="required">*</span></label>
            <input type="date" name="date" class="form-control mb-4 customDate" required placeholder="dd-mm-yyyy"
                oninvalid="this.setCustomValidity('Please select valid date')" oninput="this.setCustomValidity('')"
                autofocus>

            <label>Parts of X-Ray<span class="required">*</span></label>
            <select class="browser-default custom-select mb-4" name="partsOf" required>
                <option value="" disabled selected>Select parts of X-Ray</option>
                <option value="Chest PA">Chest PA</option>
                <option value="Dental">Dental</option>
                <option value="Nosal">Nosal</option>
                <option value="Leg">Leg</option>
            </select> <br>

            <label>Referred by Doctor<span class="required">*</span></label>
            <select required class="browser-default custom-select mb-4" name="refByDoctor">
                <option value="" disabled selected>Select referred by Doctor</option>
                <option value="D.S.Mishra">D.S.Mishra</option>
                <option value="A.K.Jha">A.K.Jha</option>
                <option value="Hospital">Hospital</option>
                <option value="Self">Self</option>
            </select>

            <label>Amount<span class="required">*</span></label>
            <input type="number" name="amount" class="form-control mb-4" min="0" step=".01" required  
                oninvalid="this.setCustomValidity('Please enter valid amount')" oninput="this.setCustomValidity('')"
                autofocus  data-toggle="tooltip" data-placement="top" title="" data-original-title="Please enter only number or decimal number">

            <label>Due</label>
            <input type="number" name="due" class="form-control" min="0" step=".01" data-toggle="tooltip" data-placement="top" title="" data-original-title="Please enter only number or decimal number"><br>
            
            <label>Report<span class="required">*</span></label>
            <select class="browser-default custom-select" name="report" required>
                <option value="" disabled selected>Select Report</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>

            <button class="btn btn-default btn-block js-btn-submit mt-4" type="submit" name="submit">Submit</button><br>
            <input class="btn btn-blue-grey clearForm" type="reset" value="Reset Form">
    </form>
    </div>
    <!-- Patient form ends -->

   <!-- Including Footer -->
    <?php include 'footer.php'; ?>    
</body>
</html>