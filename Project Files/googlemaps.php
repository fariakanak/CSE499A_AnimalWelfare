<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link
      href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900"
      rel="stylesheet"
    />
    <link rel="shortcut icon" type="image/ico" href="img/favicon.png" />

    <title>Locate Veterinarian or Organization</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css" />

    <link rel="stylesheet" type="text/css" href="font-awesome.css" />

    <link rel="stylesheet" href="homestyles.css" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800" rel="stylesheet" />
    <link href="maps.css" rel="stylesheet" />
</head>

  <body>
  <header class="header-area header-sticky">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="main-nav">
              <!-- ***** Logo Start ***** -->
              <a href="#" class="logo">
                <img src="img/logo.png" alt="Happy Tails" />
              </a>
              <!-- ***** Logo End ***** -->
              <!-- ***** Menu Start ***** -->
              <ul class="nav">
                <li><a href="home.html">Home</a></li>
                <li>
                  <a href="animalhealthcare.html" class="active"
                    >Animal Healthcare</a
                  >
                </li>
                <li><a href="welfare.html">Welfare Services</a></li>
                <li><a href="adoptionportal.html">Adoption</a></li>
                <li><a href="loginreg.html">Sign up/Sign in</a></li>
              </ul>
              <a class="menu-trigger">
                <span>Menu</span>
              </a>
              <!-- ***** Menu End ***** -->
            </nav>
          </div>
        </div>
      </div>
    </header>
  <?php
  if (isset($_POST["submit_address"]))
  {
    $address = $_POST["address"];
    ?>

    <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed"></iframe>
    <?php
  }
  ?>
<div class="s006">
<form method="POST">
<fieldset>
          <legend>What are you looking for?</legend>
          <div class="inner-form">
            <div class="input-field">
              <input type="text" id="search" name="address" placeholder="" value="Enter the address" />
              <input type="submit" name="submit_address" value="Search">
            </div>
          </div>
          <div class="suggestion-wrap">
            <span>Vet and Pet Care</span>
            <span>Veterinary Clinic</span>
            <span>Obhoyaronno</span>
          </div>
        </fieldset>
</form>
</div>
  </body>
</html>
