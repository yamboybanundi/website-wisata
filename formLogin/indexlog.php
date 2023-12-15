<?php

@include 'conectionuser.php';

session_start();

//untuk mengimput data kedalam phpMyadmin
if (isset($_POST['submit'])) {

  $email = mysqli_real_escape_string($conn, $_POST['usermail']);
  $username = md5($_POST['username']);
  $pass = md5($_POST['password']);
  $cpass = md5($_POST['cpassword']);

  $select = " SELECT * FROM db_users WHERE username=' $username' email = '$email' && password = '$pass'";

  $result = mysqli_query($conn, $select);

  if (
    mysqli_num_rows($result) >
    0
  ) {
    $error[] = 'user already exist';
  } else {
    if ($pass != $cpass) {
      $error[]
        = 'password not mathched!';
    } else {
      $insert = "INSERT INTO db_users (username,email, password) VALUES('$username','$email','$pass')";
      mysqli_query($conn, $insert); //
      header('location:indexlog.php');
    }
  }
} // untuk megambil data yang tersimpan
//di phpmyadmin lalu di gunakan untuk login 

if (isset($_POST['submit'])) {
  $email
    = mysqli_real_escape_string($conn, $_POST['usermail']);
  $pass =
    md5($_POST['password']);
  $select = " SELECT * FROM db_users WHERE username = '$username', email =
'$email' && password = '$pass'";
  $result = mysqli_query($conn, $select);
  if (mysqli_num_rows($result) > 0) {
    $_SESSION['usermail'] = $email;
    header('location:formadmin/admin.php');
  } else {
    $error[] = 'incorrect username,  password or
email.';
  }
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="csslog.css" />
  <title>Sign in & Sign up Form</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="" class="sign-in-form" method="post">
          <h2 class="title">Sign in</h2>
          <?php
          if (isset($error)) {
            foreach ($error as $error) {
              echo '<span class="error-msg">' . $error . '</span>';
            }
          }
          ?> <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="username" placeholder="masukan username Anda" required />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" name="usermail" placeholder="masukan Email Anda" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Masukan Password Anda" required />
          </div>
          <input type="submit" value="Login" class="btn solid" name="submit" />


          <!-- icon -->
          <p class="social-text">Or Sign in with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="bx bxl-instagram"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="bx bxl-facebook-circle"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="bx bxl-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="bx bxl-whatsapp-square"></i>
            </a>
          </div>
        </form>
        <form action="" class="sign-up-form" method="post">
          <h2 class="title">Sign up</h2>
          <?php
          if (isset($error)) {
            foreach ($error as $error) {
              echo '<span class="error-msg">' . $error . '</span>';
            }
          }
          ?>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="username" placeholder="masukan username anda" required />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" name="usermail" placeholder="masukan email anda" required />
          </div>
          <div class="input-field">
            <i class="fas  fa-lock"></i>
            <input type="password" name="paswoard" placeholder="masukan password anda" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="cpassword" placeholder="Konfirmasi Password Anda" required />
          </div>
          <input type="submit" class="btn" value="Sign up" name="submit" />


          <!-- icon -->
          <p class="social-text">Or Sign up with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="bx bxl-instagram"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="bx bxl-facebook-circle"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="bx bxl-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="bx bxl-whatsapp-square"></i>
            </a>
          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
            ex ratione. Aliquid!
          </p>
          <button class="btn transparent" id="sign-up-btn">Sign up</button>
        </div>
        <img src="img/log.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us ?</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
            laboriosam ad deleniti.
          </p>
          <button class="btn transparent" id="sign-in-btn">Sign in</button>
        </div>
        <img src="img/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="log.js"></script>
</body>

</html>