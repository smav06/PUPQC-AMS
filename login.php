<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>LOGIN  jkdaskdhasdsakj | PUP QC AMS</title>

  <!-- Favicons-->
  <link rel="icon" href="images/PUPLogo.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/sweetalert/sweetalert.css" type="text/css" rel="stylesheet" media="screen,projection">
  
</head>

<body class="cyan">
  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form action="#" method="POST" class="login-form">

        <div class="row">
          <div class="input-field col s12 center">
            <img src="images/PUPLogo.png" alt="" class="circle responsive-img valign profile-image-login">
            <p class="center login-form-text">PUP QC <br>ASSET MANAGEMENT SYSTEM</p>
          </div>
        </div>

        <?php

          if(isset($_POST["submit"]))
          {

            $username = $_POST['usernames'];
            $password = sha1($_POST['passwords']);

            $mysqli = new mysqli("localhost", "root", "", "AMS_SAMPLE_DB");

            if ($mysqli->connect_errno) 
            {
              echo "Failed to connect to Database: " . $mysqli->connect_error;
            }

            $res = $mysqli->query("SELECT * FROM AMS_R_USER AS U INNER JOIN AMS_R_EMPLOYEE_PROFILE AS EP ON U.EP_ID = EP.EP_ID WHERE U.U_USERNAME='$username' and U.U_PASSWORD='$password'");
            $row = $res->fetch_assoc();
            $fname = $row['EP_FIRST_NAME'];
            $mname = $row['EP_MIDDLE_NAME'];
            $lname = $row['EP_LAST_NAME'];
            $name = $fname.' '.$mname.' '.$lname;
            $user = $row['U_USERNAME'];
            $pass = $row['U_PASSWORD'];
            $type = $row['U_ROLE_CODE'];

            if($user==$username && $pass=$password)
            {
              session_start();
              if($type=="Departmental User")
              {
                $_SESSION['mysesi']=$name;
                $_SESSION['mytype']=$type;
                echo "<script>window.location.assign('du-dashboard.php')</script>";
              } 
              else if($type=="Administrator")
              {
                $_SESSION['mysesi']=$name;
                $_SESSION['mytype']=$type;
                echo "<script>window.location.assign('ad-dashboard.php')</script>";
              }
              else if($type=="Property Officer")
              {
                $_SESSION['mysesi']=$name;
                $_SESSION['mytype']=$type;
                echo "<script>window.location.assign('po-dashboard.php')</script>";
              } 
              else
              {
          ?>
            

          
          <?php
              }
            }
            else
            {
          ?>

            <div class="row margin">
              <p style="margin-left: 13px; color: #8C1C1C;">Incorrect Username and/or Password!</p>
            </div>

          <?php
            }
          }
          ?>

        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
<<<<<<< HEAD:index.php
            <input name="usernames" type="text" value="osas-du-0001" required="required">
=======
            <input name="usernames" type="text" value="DU20180001" required="required">
>>>>>>> 2af72c71ba6e4c55cd73852e5c8fbec8665bf0d5:login.php
            <label for="username" class="center-align">Username</label>
          </div>
        </div>

        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input name="passwords" value="password" type="password" required="required">
            <label for="password">Password</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input type="submit" name="submit" class="btn waves-light col s12">
            <!-- <a id="submit" name="submit" class="btn waves-effect waves-light col s12">Login</a> -->
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small"><a href="page-forgot-password.html">Forgot password ?</a></p>
          </div>          
        </div>

      </form>
    </div>
  </div>

  <!-- jQuery Library -->
  <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <!--prism-->
  <script type="text/javascript" src="js/plugins/prism/prism.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>   
    <!--sweetalert -->
    <script type="text/javascript" src="js/plugins/sweetalert/sweetalert.min.js"></script>   

      <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>

    <script type="text/javascript">
      
      $('.btn-success').click(function(){
          swal("Good job!", "You clicked the button!", "success");
        });

    </script>

</body>

</html>
