<!DOCTYPE html>
<html lang="en">

<head>
    <title>Confirmation</title>
    <link rel="icon" href="images/dvr-fav-icon.png" type="image/icon type">
</head>

<body class="contactus-body">

<!-- Including Header page -->
<?php include 'header.php'; ?>

<?php if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    // Form captured data to show on confirmation page
    echo '<center><h2>Thank you for your interest in Digital VR Gamer</h2></center>';
    echo '<center><h5><p>We will review your submission and reach out to you in 1-3 business days</p></h5></center><br><br>';

    echo "<div style='text-align:left; padding-left:35%;'><span style='color: white;'/><p>Your Name: &nbsp;" .
        $name .
        '</span> </p>';
    echo "<span style='color: white;'/><p>Email Address: &nbsp;" .
        $email .
        '</span> </p>';
    echo "<span style='color: white;'/><p>Address: &nbsp;" .
        $address .
        '</span> </p>';
    echo "<span style='color: white;'/><p>City: &nbsp;" .
        $city .
        '</span> </p>';
    echo "<span style='color: white;'/><p>Phone Number: &nbsp;" .
        $number .
        '</span> </p>';
    echo "<span style='color: white;'/><p>Message: &nbsp;" .
        $message .
        '</span> </p></div>';

    //validation of all above fields
    if (
        !empty($name) ||
        !empty($email) ||
        !empty($address) ||
        !empty($city) ||
        !empty($number)
    ) {
        //Mail send logic
        $to = 'digitalvrgamer@gmail.com';
        $subject = 'Contact Us';

        $headers =
            'From: mdzakirullah42@gmail.com' .
            "\r\n" .
            'X-Mailer: PHP/' .
            phpversion();
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $message =
            '<html><body style="font-family:calibri">
                    <p>Thank you for contacing Digital VR Gamer</p>
                    <p><strong> Name: </strong>' .
            $name .
            '</p>
                    <p><strong> Email: </strong>' .
            $email .
            '</p>
                    <p><strong> Address: </strong>' .
            $address .
            '</p>
                    <p><strong> City: </strong>' .
            $city .
            '</p>
                    <p><strong> Phone Number: </strong>' .
            $number .
            '</p>
                    <p><strong> Message: </strong>' .
            $message .
            '</p>
        </body></html>';

        $run = mail($to, $subject, $message, $headers);
    }
} ?>

<!-- Including Footer page -->
<?php include 'footer.php'; ?>

</body>
</html>