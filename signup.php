<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup - AlphaCode</title>
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

<div class="sidebar_register">
  <img src="programming-code.png" alt="">
   <h1>Welcome To AlphaCode</h1>
   <h5>Have an account?</h5>
   <a href="index.php" class="btn signUp__button sign-up-register">Sign In</a>

</div>

<div class="signUp_form_container">
    <h2>Create Account</h2>
        <form method="POST" action="register.php">
        <input type="text" name="uname" class="username_box signup-Input" placeholder="Username" required minlength="3">
            <input type="password" id="pword" name="pword" class="password_box signup-Input" placeholder="Password" pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}' title="Must contain at least one uppercase 
                            and  lowercase letter, and at least 5 or more characters" required>

                    <div id="message">
                    <h5>Password must contain the following:</h5>
                    <p id="letter" class="invalid">A lowercase letter</p>
                    <p id="capital" class="invalid">A capital (uppercase) letter</p>
                    <p id="length" class="invalid">Minimum 5 characters</p>
                    </div>
                  
              
                            <input type="password" id="cpword" name="cpword" class="password_box signup-Input" placeholder="Confirm Password" pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}' title="Must contain at least one
                             uppercase and  lowercase letter, and at least 5 or more characters" required>
                             <div id="password-message">    
                                <p id="confirmPassMessage">Make sure the password match each other *winks*</p>     
                            </div>
                  
                       
                            <button class="signIn__button" name="login" type="submit">Sign Up</button>
                        </form>

</div>
<!--    
                    <div id="message">
                    <h5>Password must contain the following:</h5>
                    <p id="letter" class="invalid">A lowercase letter</p>
                    <p id="capital" class="invalid">A capital (uppercase) letter</p>
                    <p id="length" class="invalid">Minimum 5 characters</p>
                    </div> -->



</section>


   
    <script src="assets/js/script.js"></script>
    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js" ></script>
    <script scr="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

</body>

</html>