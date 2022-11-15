<!DOCTYPE html>
<html lang="en">

<head>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <title>Apply to Adopt</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="d-style.css">
    <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Comfortaa:wght@500&family=EB+Garamond&family=Libre+Baskerville&family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- Icon -->
    <link rel="icon" href="img/adoptmeh icon.png">
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="applyToAdopt.css">

    <!--jQuery & Bootstrap for Date Picker-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>

    <!-- Back To Top -->
    <div class="arrow">
        <a href="#" title="Back to Top"><span class="fas fa-angle-up"></span></a>
    </div>

    <!-- NAVIGATION AND LANDING PAGE-->
    <section id=home>
        <nav class="navbar navbar-expand-md">
            <a href="index.php" class="logo">
                <img src="img/adoptmeh logo.png" width="100" height="100"></a>
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="main-navigation">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="adoptmeh.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="dogs.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Find a Pet
              </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="dogs.php"> Find A Dog</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="cats.php"> Find A Cat</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="applyToAdopt.php">Apply to Adopt</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="howItWorks.php">How It Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="donate.php">Donate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"> <i class="fas fa-sign-in-alt"></i> Log Out</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- PAGE APPLICATION FORM -->
        <div class="appform">
            <h1>APPLICATION FORM</h1>
        </div>
        <div class="appli">
            <form>
                <div id="name">
                    <h2 class="name">Name</h2>
                    <input class="firstname" type="text" name="first_name"><br>
                    <label class="firstlabel">First Name</label>
                    <input class="lastname" type="text" name="last_name">
                    <label class="lastlabel">Last Name</label>
                </div>
                <h2 class="pet">Pet ID: </h2>
                <input class="pet-id" type="text" name="pet-id" placeholder="#D00 or #C00">

                <h2 class="email-class">Email</h2>
                <input class="email" type="text" name="email">

                <h2 class="phone-class">Phone</h2>
                <input class="code" type="text" name="city_code">
                <label class="city_code">City Code</label>
                <input class="number" type="text" name="phone">
                <label class="phone-number">Phone Number</label>

                <h2 class="owner-class">Pet Owner</h2>
                <select class="option" name="pet_owner">
            <option disabled="disabled" selected="selected">Choose Option</option>
            <option>Yes</option>
            <option>No</option>
        </select>
            </form>
            <!-- Schedule form -->
            <h2 class="interview">Choose Date for Online Interview</h2>
            <input type="text" id="datepicker" class="form-control">

            <h2 class="interview">Choose Time for Online Interview </h2>
            <input type="time" id="timepicker" class="form-control"><br>

            <div class="application-container">
                <a href="householdinfo.php"><button class="btn btn-primary "> NEXT </button></a>
            </div>
        </div>




        <!-- PAGE FOOTER -->
        <footer class="page-footer bg-dark">
            <div class="bg-success">
                <div class="container">
                    <div class="row py-4 d-flex align-items-center">

                        <div class="col-md-12 text-center">
                            <a href="https://www.facebook.com/home"><i class="fab fa-facebook-f white-text mr-4"> </i></a>
                            <a href="https://www.twitter.com/home"><i class="fab fa-twitter white-text mr-4"> </i></a>
                            <a href="https://www.gmail.com"><i class="fab fa-google-plus-g white-text mr-4"> </i></a>
                            <a href="https://www.instagram.com"><i class="fab fa-instagram white-text"> </i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container text-center text-md-left mt-5">
                <div class="row">
                    <div class="col-md-3 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold " style=" font-size: larger;">About Us</h6>
                        <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 125px; height: 2px">
                        <p class="mt-2">Adoptmeh ensures the safety of rescued pets around the world that is being advertised by our website to promote awareness among adoption of rescued pets.</p>
                    </div>
                    <div class="col-md-2 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold" style="font-size: larger;">Services</h6>
                        <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 85px; height: 2px">

                        <ul class="list-unstyled">
                            <li class="my-2"><a href="cats.html">Cats</a></li>
                            <li class="my-2"><a href="dogs.html">Dogs</a></li>
                            <li class="my-2"><a href="#">Application Form</a></li>
                            <li class="my-2"> <a href="#">Online Interviews</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold" style=" font-size: larger;">Useful links</h6>
                        <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto " style="width: 110px; height: 2px ">
                        <ul class="list-unstyled ">
                            <li class="my-2 "><a href="adoptmeh.html">Home</a></li>
                            <li class="my-2 "><a href="#">Donate</a></li>
                            <li class="my-2 "><a href="HowItWorks.html">How It Works</a></li>
                            <li class="my-2 "> <a href="# ">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 mx-auto mb-4 ">
                        <h6 class="text-uppercase font-weight-bold " style=" font-size: larger;">Contact</h6>
                        <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto " style="width: 75px; height: 2px ">
                        <ul class="list-unstyled ">
                            <li class="my-2 "><i class="fas fa-home mr-3 "></i> #24 Mapayapa St. Quezon City</li>
                            <li class="my-2 "><i class="fas fa-envelope mr-3 "></i> adoptmeh@gmail.com</li>
                            <li class="my-2 "><i class="fas fa-phone mr-3 "></i> + 02 684 5294</li>
                            <li class="my-2 "><i class="fas fa-print mr-3 "></i> + 63 925 6452 368</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright text-center py-3 ">
                <p>&copy; Copyright
                    <a href="# ">adoptmeh.com</a></p>
                <p>Designed by The Cascaders</p>
            </div>
        </footer>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
        <script>
            $(function() {
                $('#datepicker').datepicker({
                    format: "mm/dd/yyyy",
                    autoclose: true,
                    todayHighlight: true,
                    showOtherMonths: true,
                    selectOtherMonths: true,
                    autoclose: true,
                    changeMonth: true,
                    changeYear: true,
                    orientation: "button"
                });

            });
        </script>



        <!-- <script src="applyToAdopt.js"></script> -->


</body>

</html>