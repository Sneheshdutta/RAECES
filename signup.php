<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
    //header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up </title>
        <link rel="shortcut icon">

      <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap Core CSS -->
      <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
      <link href="css/style.css" rel="stylesheet">
    <!-- jQuery -->
      <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
      <script src="js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-7">
               <img src="https://scontent-lhr3-1.cdninstagram.com/v/t51.2885-15/e35/69621065_973948696330560_2598195506709655611_n.jpg?_nc_ht=scontent-lhr3-1.cdninstagram.com&_nc_cat=100&oh=88106d120778c3c463aa4675f6c15d02&oe=5E0963BE&ig_cache_key=MjEyNDI0OTAzNTExNTA3NjUzNA%3D%3D.2">
            </div>

            <div class="col-sm-5">

                <h2 style="color:blue">Student Sign Up</h2>

                    <form  action="signup_script.php" method="POST">

                        <div class="form-group col-sm-10">
                            <input class="form-control" placeholder="Name" name="name" pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+" required>
                        </div>

                        <div class="form-group col-sm-10">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required>
                                <?php
                                if(isset($_GET["m1"])){
                                  echo $_GET['m1'];
                                }
                                ?>
                        </div>

                        <div class="form-group col-sm-10">
                                <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required>
                        </div>
                        <div class="form-group col-sm-10">
                                <input type="password" class="form-control" placeholder="Re-type Password" pattern=".{6,}" name="cnf_password" required>
                        </div>

                        <div class="form-group col-sm-10">
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required>
                                <?php
                                if(isset($_GET["m2"])){
                                  echo $_GET['m2'];
                                }
                                ?>
                        </div>

                        <div class="form-group col-sm-10">
                                <input  type="text" class="form-control"  placeholder="City" name="city">
                        </div>

                        <div class="form-group col-sm-10">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" >
                        </div>

                        <div class="col-sm-10">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>  
                        <div class="col-sm-10">
                        </div>
                </form>
        </div>
    </div>
    </div>
    </body>
</html>