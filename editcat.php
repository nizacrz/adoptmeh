<?php
include "dbconnection.php";
    $id=$_GET["id"];
    $cat_id="";
    $cat_name="";
    $cat_description="";
    $image="";
    $res=mysqli_query($conn,"select * from cats where id=$id");
    while($row=mysqli_fetch_array($res))
        {
            $cat_id=$row["cat_id"];
            $cat_name=$row["cat_name"]; 
            $cat_description=$row["cat_description"];
            $image=$row["image"];
        }
?>

<!DOCTYPE html>
<html>
<head>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <title>Find a Cat</title>
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
    <link rel="stylesheet" type="text/css" href="edit.css">

</head>
<!-- Nav Area -->
<section id=home>
    <nav class="navbar navbar-expand-md">
        <a href="adoptmeh.php" class="logo">
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

    <body>

        <!-- Back To Top -->
        <div class="arrow">
            <a href="#" title="Back to Top"><span class="fas fa-angle-up"></span></a>
        </div>

        <div class="container">
<div class="col-lg-5" style="float:none;margin:auto;">

  <h2 class="title">Update</h2>

  <form action=" " name=form1 method="post" enctype="multipart/form-data">
  <center>
  <div class="dsimg">
  <img src="<?php echo $image; ?>" height="200" width="200">
  </div>
    </center>

    <div class="form-group">
      <label for="cat_id">Cat ID:</label>
      <input type="text" class="form-control" id="cat_id" placeholder="Enter Cat ID" name="cat_id" value="<?php echo $cat_id; ?>">
    </div>
    <div class="form-group">
      <label for="cat_name">Cat Name:</label>
      <input type="text" class="form-control" id="cat_name" placeholder="Enter Cat Name" name="cat_name" value="<?php echo $cat_name; ?>">
    </div>
    <div class="form-group">
      <label for="cat_description">Cat Description:</label>
      <input type="text" class="form-control" id="cat_description" placeholder="Enter Cat Description" name="cat_description" value="<?php echo $cat_description; ?>">
    </div>

    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" name="images" >
    </div>

    <button type="submit" name="update" class="btn btn-default">Update</button>
    </div>
        <br><br>
  </form>
</div>

<?php
    if(isset($_POST["update"])) {

      $tm=md5(time());
      $fnm=$_FILES["images"]["name"];

      if($fnm=="")
      {
        mysqli_query($conn,"update cats set cat_id='$_POST[cat_id]',cat_name='$_POST[cat_name]',cat_description='$_POST[cat_description]' where id=$id");
      }
      else
      {
        $dst="./catImages/".$tm.$fnm;
        $dst1="catImages/".$tm.$fnm;
        move_uploaded_file($_FILES["images"]["tmp_name"], $dst);
  
        mysqli_query($conn,"update cats set
        cat_id='$_POST[cat_id]',cat_name='$_POST[cat_name]', cat_description='$_POST[cat_description]', image='$dst1' where id=$id");
      }
?>

<script type="text/javascript">
window.location="cats.php";
</script>
<?php
}
?>

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

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.D/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="dogs.js"></script>

    </body>

</html>