
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - AlphaCode</title>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>	
    <link rel="stylesheet" href="style.css">

                        <link href='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css' rel='stylesheet'/>
			<script src='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js'></script>
                     
	
</head>

<body>
	<?php
		session_start();
		echo $_SESSION['msg'];
	?>
    <section class="container">

        <div class="sidebar">
	          <h2>Welcome To AlphaCode</h2>
            <p>Enter your details </p>
            <p>and start your journey with us </p>
            <button class="signUp__button">Sign Up</button>

        </div>

        <div class="login_form_container">
            <h2>Sign in to Code</h2>
            <form method="POST" action="login.php">
                <input type="text" name="uname" class="username_box" placeholder="Username">
                <input type="text" name="pword" class="password_box" placeholder="Password">
                <a href="#">Forgot Password</a>
                <button class="signIn__button" type="submit">Sign In</button>
            </form>


        </div>

    </section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script scr="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</body>

</html>