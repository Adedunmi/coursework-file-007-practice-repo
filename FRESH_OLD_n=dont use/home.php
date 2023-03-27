<?php
session_start();
include 'include/connection.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <title>The Tourist Websurf</title>

  <style>
    .body {
      background-image: url("https://c.wallhere.com/photos/66/43/park_travel_blue_trees_winter_usa_brown_white-687280.jpg!d");
      background-position: flex;
      background-size: cover;
      height: 500px;
      padding: 10px 5px;
    }
  </style>
</head>

<body>
  <header>
    <style>
      ul {
        list-style-type: none;
        margin: 0.5px;
        padding: 0 0 0 100px;
        overflow: hidden;
        border: 4px solid black;
        background-color: grey;
      }

      li {
        float: right;
        position: sticky;
      }

      li a {
        display: block;
        color: black;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
      }
    </style>
</body>
<div class="content" id="home">
  <div class="body">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <img id="logo" src="materials\the-tourist-websurf-logo.png" alt="C:\xampp\phpdocs\htdocs\FRESH\images\the-tourist-websurf-logo.png" height="40px" width="auto" margin="20px" float="left" border-radius="40%" />
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
        <div class="dropdown"> <div class="float-right"></div><br>
        <div class="menu">
  <button class="menu-button">Menu</button>
  <ul class="menu-list">
    <li><a href="#">Create Account/Log in</a></li>
    <li><a href="#">My Trips</a></li>
    <li><a href="#">My downloads</a></li>
  </ul>
</div>
  <style>
    .menu {
  position: <div class="float-right">
    
  </div>;
}

.menu-button {
  padding: 10px;
  background-color: #333;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.menu-list {
  display: none;
  position: absolute;
  top: 100%;
  right: 20;
  padding: 10px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
}

.menu-list li {
  margin: 10px 10;
}

.menu-list a {
  color: #333;
  text-decoration: none;
}

.menu-button.active + .menu-list {
  display: block;
}

  </style>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Trip Planning</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Customer service</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Lifestyle</a>
            </li>

          </ul>
        </div>
      </div>
      <div class="container-fluid">
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </nav>




    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    <main class="text-center text-white">
      <div class="content">
        <div class="cont_bx">
          <h2 style="height:30px; padding-top: 20px; text-align: center;"></h2>
          <h2 class="fs-1">The Magnificent Tourist Guide</h2>
          <h6>Marked by Grandeur and Happiness</h6>
          <button type="button" class="btn btn-primary">Watch Video</button>
          <button type="button" class="btn btn-primary">Stories</button>
        </div>
      </div>
    </main>
    <h5 class="fs-1"></h5>
    <div class="text-center textflex--wrap">

    </div>
    <section class="text-center p-3" style="background-color: black">
      <div class="text-center text-blue"></div>
      <div class="row row-cols-auto">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Where do you want to go?</h5>
              <a href="#" class="btn btn-primary">Search destination</a>
            </div>
          </div>
        </div>
        <div class="row row-cols-auto">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Guests?</h5>
              <a href="#" class="btn btn-primary">How Many Guests?</a>
            </div>
          </div>
        </div>

        <div class="row row-cols-auto">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Date<i class="bi bi-calendar-check"></i</h5>
                  <input type="text" placeholder="dd/mm/yy">
            </div>
          </div>
        </div>
        <div class="row row-cols-auto">
          <input type="button" value="Explore">
        </div>
      </div>

  </div>
  </section>
</div>
    <style>
body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>
</head>
<body>
<h3>Africa</h3>
<img id="myImg" src="images\Tour Africa img.jpg" alt="Africa tour" style="width:100%;max-width:300px">
<div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
<body>
<h3>Europe</h3>
<img id="myImg" src="https://airlinestime.com/wp-content/uploads/2021/05/europe-tourism.jpg" alt="Europe tour" style="width:100%;max-width:300px">


<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
<h3>Asia</h3>
<img id="myImg" src="https://1.bp.blogspot.com/-sDTxci5aQx4/WSlAwwkjZCI/AAAAAAAACAQ/St45oposVJwy4SWdGPu4oIdcDbeca7QygCLcB/s1600/asia.jpg" alt="Asia tour" style="width:100%;max-width:300px">

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
<h3>America</h3>
<img id="myImg" src="https://www.insubuy.com/assets/img/article-pages/small-article-images/coverage-by-destination/north-america-travel-insurance.jpg" alt="America tour" style="width:100%;max-width:300px">

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
<h3>Australia</h3>
<img id="myImg" src="https://www.tourism.australia.com/content/corporate/en/news-and-events/news-stories/new-tourism-research-australia-forecasts-exceed-tourism-2020-target/jcr:content/mainParsys/featureimage/imageSrc.adapt.761.medium.jpg" alt="Australia tour" style="width:100%;max-width:300px">

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
<h3>Antarctica</h3>
<img id="myImg" src="https://www.tourist-destinations.com/wp-content/uploads/2013/01/Paradise-Bay-Antarctica.jpg" alt="Antarctica tour" style="width:100%;max-width:300px">


<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>

        </div>
      </div>
    </section>
    <!-- Section: Images -->
    <!--Footer-->
    <section class="footer">
      <div class="foot">
        <div class="footer-content">


      <div class="end">
        <p>Copyright © 2023. Travels All Rights Reserved.<br>Website developed by: Olajumoke</p>
      </div>
    </section>

    <!-- Javascript -->
    <script>
      function validateform() {
        var tel = document.getElementById("phonenum").value;

        if (tel.length < 10) {
          alert("Phone number must be of atleast 10 digits!");
          return false;
        } else if (isNaN(tel)) {
          alert("Phone number should not include character!");
          return false;
        }
        return true;
      }
    </script>

    <a class="text-white" href="file:///C:/Users/babar/coursework%20007.html#">The Magnificent Tourist Guide!</a>
  </div>
  <!-- Copyright -->
</footer>
</footer>
</section>
</header>
<script src="style.js"></script>

</body>

</html>