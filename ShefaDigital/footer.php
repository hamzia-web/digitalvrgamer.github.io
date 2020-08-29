<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
</head>
<body>

<!-- 
  Placing <article> tag inside of <section> tag is good practice, like section basically defines the types and 
  the articles will contain the specific contents in that type of section.
 -->
<!-- Footer starts -->
<footer class="page-footer font-medium teal pt-4">
  <div class="container text-justify text-md-justify">
    <div class="row">   <!-- Grid row -->
        <section class="col-md-7 mt-md-0 mt-3">   <!-- Grid column -->
          <address>
            <h5 class="text-uppercase font-weight-bold ">Address:</h5>
            <section class="font-italic">
              <p>Near Dr. Gargi Sinha Clinic</p>
              <p>Hospital Road</p>
              <p>Madhubani- 847212</p>
              <p>Bihar</p>
            </section>
          </address>
        </section>

      <hr class="clearfix w-100 d-md-none pb-3">

      <section class="col-md-5 mb-md-0 mb-3"> <!-- Grid column -->
        <h5 class="text-uppercase font-weight-bold">About Us</h5>
        <p>
           <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="patientForm">Patient Form <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="patientRecord">Patient Record</a>
                </li>
             </ul>
         </p>
      </section>  <!-- Grid column -->
    </div>  <!-- Grid row -->
  </div>
  <!-- copyright Text -->
   <scetion>
      <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="index" class="logoText">Shefa Digital X-Ray</a>
      </div>
   </scetion>
</footer>
<!-- Footer ends -->

<!-- js files -->
<script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/mdb.js"></script>
<script src="js/custom.js"></script>
<script src="js/jquery.table2excel.js"></script>
<script src="js/jquery-ui.min.js"></script>

</body>
</html>