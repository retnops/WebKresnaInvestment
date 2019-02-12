
<?php
$connect = mysqli_connect("localhost", "root", "1", "crud_db");
$query = "SELECT * FROM users WHERE status='aktif' order by id DESC LIMIT 4";
$result = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="http://www.kresnasecurities.com/kresna2/favicon.ico">
<title>Kresna Investment</title>
<!-- Bootstrap Core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom Fonts -->
<link href="vendor/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
<link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/stylish-portfolio.css" rel="stylesheet">
</head>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {

  /*font-family: "Lato", sans-serif;*/
}

/*DROPDOWN*/
/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 14px;
    color: #ffffff;
    display: block;
    border: none;
    background: none;
    width: 100%;
    text-align: left;
    /*cursor: pointer;*/
    outline: none;
}

    font-size: 20px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}
*/
/* Add an active class to the active dropdown button */
.active {
    background-color: black;
    color: white;
}
/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
    display: none;
    background-color: #7f6da3; /*colour down dropdown*/
    padding-left: 8px;
}
/* Optional: Style the caret down icon */
.fa-caret-down {
    float: right;
    padding-right: 8px;
}
/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>
</head>


      
<body id="page-top">
<!-- Navigation -->
        <!-- <LINK BACK> -->

<a class="menu-toggle rounded" href="#"><i class="fa fa-bars"></i></a>
<nav id="sidebar-wrapper">
<ul class="sidebar-nav">
  <li class="sidebar-brand">
    <a class="js-scroll-trigger" href="#page-top">Menu</a>
  </li>
  <li class="sidebar-nav-item">
    <a class="js-scroll-trigger" href="#page-top">Home</a>
  </li>
  <li class="sidebar-nav-item">
    <button class="dropdown-btn">About Us<i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
      <a href="direktors.html">Directors</a>
      <a href="auditcommittee.html">Audit Committee</a>
      <a href="corporatesecretary.html">Corporate Secretary</a>
      <a href="market.html">Capital Market Supporting Institutions</a>
    </div>
    <script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;
for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
    </script>
  </li>
    <!-- <a class="js-scroll-trigger" href="#about">About Us</a> -->
  </li>
  <li class="sidebar-nav-item">
    <a class="js-scroll-trigger" href="#services">Our Products</a>
  </li>
  <li class="sidebar-nav-item">
    <a class="js-scroll-trigger" href="#portfolio">Carreer</a>
  </li>
  <li class="sidebar-nav-item">
    <a class="js-scroll-trigger" href="#contact">Contact</a>
  </li>
    <li class="sidebar-nav-item">
    <a class="js-scroll-trigger" href="login.php">Login</a>
  </li>
</ul>
</nav>
<!-- Header -->
<header class="masthead d-flex">
<div class="container text-center my-auto">
  <h1 class="mb-1">Kresna Graha Investama</h1>
  <h3 class="mb-5"><em>Welcome to Kresna Securities</em></h3>
  <!--  <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a> -->
</div>
<div class="overlay"></div>
</header>
<!-- About -->

  <section class="content-section bg-light" id="about">
  <div class="container text-left">
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <h2>Kresna Graha Investama</h2>
        <p class="lead mb-5" align="justify">
           Established in 1999, Kresna Sekuritas offers an extensive range of financial services, including equities and fixed income trading, and also investment banking. We have a strong client list for underwriting equities and fixed income trading, and also investment banking. we have a strong client list for underwriting equities and bonds, covering major corporations in indonesia. Furthermore, Kresna Sekuritas is supported by an experienced and professional Research Team in providing timely information and reliable research reports. Kresna Sekuritas was listed on the Indonesia Stock Exchanges in 2002, under the ticker name KREN. Pefindo Credit Rading Indonesia has recently included KREN as one of the Underlying stocks in its Pefindo 25 Index consisting of Indonesia's fast-growing companies in 2012. In 2011, Kresna Sekuritas started to develop Kresna Direct, a real-time online trading platform to facilitate service to clients who transact through the Company. Commited in providing total customer satisfaction, Kresna Sekuritas is focusing on information technology development and business development which can increase the quality of services. 
          <!--  <a href="https://unsplash.com/">Unsplash</a>!</p>
            <a class="btn btn-dark btn-xl js-scroll-trigger" href="#services">What We Offer</a> -->
        </div>
      </div>
    </div>
    </style>
    <head></section>
    <!-- Services -->
    <section class="content-section bg-primary text-white text-center" id="services">
    <div class="container">
      <div class="content-section-heading">
        <!--         <h3 class="text-secondary mb-0">Our Product</h3>
        <h2 class="mb-5">What We Offer</h2> -->
      </div>
      </br></br></br></br>
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-12 mb-lg-0">
          <span class=" mx-auto mb-8"><img src='img/ks.jpg'></span>
        </div>
        <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
          <span class=" mx-auto mb-3"><img src='img/kamweb.jpg'></span>
        </div>
        <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
          <span class=" mx-auto mb-3"><img src='img/kuk.jpg'></span></br></br></br></br></br></br></br></br>
        </div>
      </div>
      <!-- </div> 
    </div> -->
      </section>
      <!-- Callout -->
      <section class="callout">
      <div class="container text-center">
        <h2 class="mx-auto mb-5">Carreer Available 
        <!-- <em>your</em>
          next website! -->
        </h2>
        <a class="btn btn-primary btn-xl" href="allkarir.html">Check Opportunities</a>
      </div>
      </section>
      <!-- Portfolio -->
      <section class="content-section" id="portfolio">
      <div class="container">
        <div class="content-section-heading text-center">
          <!-- <h3 class="text-secondary mb-0">Portfolio</h3> -->
          <h2 class="mb-5">Kresna News</h2>
        </div>
        <div class="row no-gutters">
<?php
     while($user_data = mysqli_fetch_array($result))
     { 
         echo "<div class='col-lg-6'>";
         // echo "<a href='more.php' class='btn btn-primary btn-xl'>Read More</a>";
            echo "<a class='portfolio-item' href='konten.php?id=$user_data[id]'>";
            echo "<span class='caption'>";
            echo "<span class='caption-content'>";
            echo "<h2>".$user_data['name']."</h2>";
            echo "<p class='mb-0'>".substr($user_data ['email'], 0, 100)."</p>";
            echo "</span>";
            echo "</span>";
            echo "<img class='img-fluid' src='img/portfolio-1.jpg' alt=''>";
            echo "</a>";
            echo "</div>";


}?>
<!-- echo "<td>".$user_data['name']."</td>";
 echo "<p><td>".substr($user_data ['email'], 0, 100)."<a href='more.php?id=$user_data[id]'>See More</a></td></p>"; -->
          <!-- <div class="col-lg-6">
            <a class="portfolio-item" href="konten.html">
            <span class="caption">
            <span class="caption-content">
            <h2>KRESNA NEWS</h2>
            <p class="mb-0">No News Availabe</p>
            </span>
            </span>
            <img class="img-fluid" src="img/portfolio-2.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="konten.html">
            <span class="caption">
            <span class="caption-content">
            <h2>KRESNA NEWS</h2>
            <p class="mb-0">No News Availabe</p>
            </span>
            </span>
            <img class="img-fluid" src="img/portfolio-3.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="konten.html">
            <span class="caption">
            <span class="caption-content">
            <h2>KRESNA NEWS</h2>
            <p class="mb-0">No News Availabe</p>
            </span>
            </span>
            <img class="img-fluid" src="img/portfolio-4.jpg" alt="">
            </a> -->
          </div>
      <!--   </div>
      </div>
 -->
      </section>
      <!-- Call to Action -->
      <section class="content-section bg-primary text-white">
      <div class="container text-center">
        <h2 class="mb-4">Join to Kresna Community</h2>
        <!--  <a href="#" class="btn btn-xl btn-light mr-4">Sign In</a>
      <a href="#" class="btn btn-xl btn-dark">Look at Me!</a> -->
      </div>
      </section>
      <!-- Map -->
      <section id="contact" class="map">
      <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15865.035390095456!2d106.810277!3d-6.229566!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe16829f74949e4fa!2sKresna+Securities!5e0!3m2!1sen!2s!4v1418705706172">
      </iframe>
      <br/>
      <small>
      <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
      </small>
      </section>
      <!-- Footer -->
      <footer class="footer text-center">
      <div class="container">
        <ul class="list-inline mb-5">
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="#"><i class="icon-social-facebook"></i></a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="#"><i class="icon-social-twitter"></i></a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white" href="#"><i class="icon-social-github"></i></a>
          </li>
        </ul>
        <p class="text-muted small mb-0">Copyright &copy;</p>
      </div>
      </footer>
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top"><i class="fa fa-angle-up"></i></a>
      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Plugin JavaScript -->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Custom scripts for this template -->
      <script src="js/stylish-portfolio.min.js"></script>

   
      </body>
      </html>