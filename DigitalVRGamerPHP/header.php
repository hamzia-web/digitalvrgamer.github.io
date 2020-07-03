<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet">
    <link href="bootstrap/css/mdb.css" type="text/css" rel="stylesheet">
    <link href="style.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

     <!-- Scroll Up and down button start-->
    <button id="btnScrollTop">
        <i class="material-icons">arrow_upward</i>
    </button>

    <button id="btnScrollDown">
        <i class="material-icons">arrow_downward</i>
    </button>
    <!-- Scroll Up and down button end-->

    <!-- Header Nav Section start-->
    <div class="row">
        <header>
            <div class="wrapper">
                <a href="index.php" class="logo" title="Digital VR Gamer"><img src="images/dvr.png" alt="logo"></a>

                <nav>
                    <a class="burger-nav"></a>
                    <h2>Main Navigation</h2>
                    <ul>
                        <li class="active"><a href="augmentedReality.php">AR</a></li>
                        <li><a href="virtualReality.php">VR</a></li>
                        <li><a href="mixedReality.php" >MR</a></li>
                        <li><a href="rentalServices.php">Rental Service</a></li>
                        <li><a href="events.php">Events</a></li>
                        <li><a href="itServices.php">IT Services</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    </div><br>
    <!-- Header Nav Section end-->

    <!-- Call, whatsapp and Email section start-->
    <div class="tel-number-band"><a href="tel:+91-7846062791"
            onclick="ga('send', {hitType: 'event', eventCategory: 'PhoneCall', eventAction: 'Call', eventLabel: 'Slider call'});"><img
                src="images/call.png" alt="Call me"></a>

         <a href="https://wa.link/fhbr4f" target="_blank">
            <img src="images/whatsapp.png" alt="click to chat"/>
        </a>
    </div>

    <div class="email-band">
        <a href="mailto:digitalvrgamer@gmail.com">
            <img src="images/email.png" alt="email me">
        </a>
    </div>
    <!-- Call, whatsapp and Email section end-->

</body>
</html>