<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shefa Digital X-Ray</title>
    <!-- <base href="images/"></base> -->
</head>

<body class="green lighten-5">

<!-- Including Header -->
<?php include 'header.php'; ?> 

   <article>
     <h2>
        <b>
          <marquee direction="left" class="blue-grey darken-1 p-3 deep-orange-text">Welcome to Shefa Digital X-Ray</marquee>
        </b>
      </h2>
    </article><br>	  

<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-2" data-slide-to="1"></li>
      <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol><!--Indicators-->

  <!--Slides-->
  <div class="container">
     <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <div class="view overlay">
            <img class="img-fluid border border-info" src="images/machine1.jpg" alt="First slide">
            <div class="mask flex-center rgba-stylish-strong"></div>
          </div>
          <div class="carousel-caption">
            <p><a href="services.php"><button type="button" class="btn btn-success btn-sm">Know More</button></a></p>
          </div>
        </div>

        <div class="carousel-item">
          <div class="view overlay">
            <img class="img-fluid border border-info" src="images/report.jpg" alt="Second slide">
            <!-- <div class="mask flex-center rgba-white-strong"></div> -->
          </div>
          <div class="carousel-caption">
            <p><a href="services.php"><button type="button" class="btn btn-success btn-sm">Know More</button></a></p>
          </div>
        </div>

        <div class="carousel-item">
          <div class="view overlay">
            <img class="img-fluid border border-info" src="images/machine2.jpg" alt="Third slide">
            <div class="mask flex-center rgba-teal-light"></div>
          </div>
          <div class="carousel-caption">
            <p><a href="services.php"><button type="button" class="btn btn-success btn-sm">Know More</button></a></p>
          </div>
      </div>
  </div><!--Slides-->

  <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--Controls-->
  </div>
</div><br><br> 
<!--Carousel Wrapper-->

<!-- Including Footer -->
<?php include 'footer.php'; ?>

</body>
</html>