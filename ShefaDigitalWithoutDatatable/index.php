<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="grey lighten-2">
    <!-- Including Header -->
   <?php include 'header.php'; ?> 

   <h2>
        <b>
            <marquee direction="left" class="blue-grey darken-2 p-3 text-white">
                 Welcome to Shefa Digital X-Ray
            </marquee>
        </b>
    </h2>
			  
<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="container">
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
     <img class="img-fluid" src="images/chicago.jpg" alt="First slide">
        <!-- <div class="mask rgba-black-light" class="d-block w-100"></div> -->
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Light mask</h3>
        <p>First text</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
       <img class="img-fluid" src="images/22.jpg" alt="Second slide">
        <!-- <div class="mask rgba-black-strong"></div> class="d-block w-100"  -->
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Strong mask</h3>
        <p>Secondary text</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
      <img class="img-fluid" src="images/ny.jpg" alt="Third slide">
        <!-- <div class="mask rgba-black-slight"></div>  class="d-block w-100"-->
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Slight mask</h3>
        <p>Third text</p>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
</div><br><br> 
<!--/.Carousel Wrapper-->
    <!-- Including Footer -->
    <?php include 'footer.php'; ?>

</body>

</html>