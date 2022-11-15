
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UVA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Comfortaa:wght@500&family=EB+Garamond&family=Libre+Baskerville&family=Montserrat:wght@300&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <title> adoptmeh.com </title>

    <!-- Icon -->
    <link rel="icon" href="img/adoptmeh icon.png">

    <link rel="stylesheet" type="text/css" href="login.css">

</head>

<body>
    <div class="container">
        <div class="myform">
            <form id="form" action="login.php" method="post">
                <h2> ADMIN LOGIN </h2>
                <?php if (isset($_GET['error'])) { ?>

                    <p style="color: red; font-size: 15px" class="error"><?php echo $_GET['error']; ?></p>

                <?php } ?>

                <input type="text" placeholder="Username" id="username" name="username">
                <input type="password" placeholder="Password" id="password" name="password">
                <i class="bi bi-eye-slash" id="togglePassword"></i>
                <button class="button-clicked" id="button"> LOGIN </button>

            </form>
        </div>
        <div class="image">
            <img src="img/adoptmeh-login.png">
        </div>
    </div>

    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="login.js"></script>
</body>

</html>


