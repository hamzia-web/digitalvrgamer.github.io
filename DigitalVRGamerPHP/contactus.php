<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us</title>
    <link rel="icon" href="images/dvr-fav-icon.png" type="image/icon type">
</head>

<body class="contactus-body">

    <!-- Include Header  -->
    <?php include 'header.php'; ?>

    <!-- Default form contact -->
    <form class="text-center border border-light p-5 contactUsForm" action="confirmation" method="POST"
        autocomplete="off">

        <div class="contactUsForm">
            <p class="h1 mb-4 text-white">Contact Us</p>
            <span class="pull-right ">*Required Fields</span>

            <label>Your Name <span class="required">*</span></label>
            <input type="text" name="name" class="form-control mb-4" required placeholder="Name"
                oninvalid="this.setCustomValidity('Please enter valid name')" oninput="this.setCustomValidity('')" autofocus>

            <label>Email Address <span class="required">*</span></label>
            <input type="email" name="email" class="form-control mb-4" placeholder="example@gmail.com" required
                oninvalid="this.setCustomValidity('Please enter valid email')" oninput="this.setCustomValidity('')" autofocus>

            <label>Address <span class="required">*</span></label>
            <input type="text" name="address" class="form-control mb-4" placeholder="Address" required
                oninvalid="this.setCustomValidity('Please enter address')" oninput="this.setCustomValidity('')">

            <label>City <span class="required">*</span></label>
            <input type="text" name="city" class="form-control mb-4" placeholder="City" required
                oninvalid="this.setCustomValidity('Please enter city')" oninput="this.setCustomValidity('')">

            <label>Phone Number<span class="required">*</span></label>
            <input type="tel" name="number" class="form-control mb-4" placeholder="10-digit mobile number" required
                oninvalid="this.setCustomValidity('Please enter valid phone number')" oninput="this.setCustomValidity('')"
                pattern="[6789][0-9]{9}" data-toggle="tooltip" data-placement="top"
                title="Phone number must starts with 6|7|8|9 followed by 9 digits" min="10" maxlength="10">

            <label>Message </label>
            <div class="form-group">
                <textarea style="overflow:auto;resize:none" class="form-control rounded-0" name="message" rows="3"
                    placeholder="Message"></textarea>
            </div>

            <button class="btn btn-default btn-block js-btn-submit" type="submit" name="submit">Submit</button><br>
            <input class="btn btn-blue-grey clearForm" type="reset" value="Reset Form">
    </form>
    </div>
    <!-- Default form contact -->

    <!-- Including Footer page-->
    <?php include 'footer.php'; ?>

</body>

</html>