<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>CI Login & Registeration</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="../assets/normalize.css">
  <link rel="stylesheet" href="../assets/skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>






  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <h3>CodeIgniter Login & Registration</h3>
    <form  action="/users/login"  method = 'post'>
    <h4>Login</h4>
      <div class="row">
        <div class="six columns">
          <label for="email">Email</label>
          <input class="u-full-width" type="text" placeholder="Email" name="email">
        </div>
        <div class="six columns">
          <label for="password">Password</label>
          <input class="u-full-width" type="password" placeholder="Password" name="password">
          <input class="button-primary" type="submit" value="Login">
        </div>
      </div>
    </form>
    <hr>
    <form action="/users/register" method = "post">
    <h4>Register</h4>
    <?php
          // if($this->session->flashdata('errors'))
          // {
            echo $this->session->flashdata('errors');
          // }
    ?>
      <div class="row">
        <div class="six columns">
          <label for="first name">First Name</label>
          <input class="u-full-width" type="text" placeholder="First Name" name="first_name">
        </div>
        <div class="six columns">
          <label for="last name">Last Name</label>
          <input class="u-full-width" type="text" placeholder="Last Name" name="last_name">
        </div>
      </div>
      <div class="row">
        <div class="six columns">
          <label for="Password">Password</label>
          <input class="u-full-width" type="password" placeholder="Password - Min. eight characters" name="password">
        </div>
        <div class="six columns">
          <label for="confirm password">Confirm Password</label>
          <input class="u-full-width" type="password" placeholder="Confirm Password" name="confirm_password">
        </div>
      </div>
      <div class="row">
         <div class="six columns">
          <label for="Email">EMail</label>
          <input class="u-full-width" type="email" placeholder="Email" name="email">
        </div>
        <div class="six columns">
          
          <input style='margin-top:28px' class="button-primary" type="submit" value="Register">
        </div>
      </div>
    </form>
  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
