<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - AlphaCode</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Basic|Roboto&display=swap" rel="stylesheet"> 
    <link href='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css' rel='stylesheet' />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js'></script>


</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['name'])) {
        echo $_SESSION['msg'];
    }

    ?>

<section class="main-container">

<div class="sidebar">
  <img src="programming-code.png" alt="">
   <h1>Welcome To AlphaCode</h1>
   <p>Enter your details </p>
   <p>and start your journey with us </p>
   <a href="signup.php" class="btn signUp__button">Sign Up</a>


</div>

<div class="login_form_container">
    <h2>Sign in to Code</h2>
    <form method="POST" action="login.php">
        <input type="text" name="uname" class="username_box" placeholder="Username" required minlength="3">
        <input type="password" id="pword" name="pword" class="password_box" placeholder="Password" pattern='[a-zA-Z]{3,15}' title="Must contain at least one uppercase and  lowercase letter, and at least 3 or more characters" required>
        <a href="#">Forgot Password?</a>
        <button class="signIn__button" type="submit">Sign In</button>
    </form>
    <div id="message">
        <h5>Password must contain the following:</h5>
        <p id="letter" class="invalid">A lowercase letter</p>
        <p id="capital" class="invalid">A capital (uppercase) letter</p>
        <p id="length" class="invalid">Minimum 3 characters</p>
    </div>

</div>

</section>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </div>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js" ></script>
    <script scr="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</body>

</html>
