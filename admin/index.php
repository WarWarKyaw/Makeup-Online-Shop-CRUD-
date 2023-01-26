<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/AdminStyle.css">
    <style>
        input[type=submit]{
            display: inline;
            width: 100px;
        }
    </style>
</head>
<body>
    <h1>Login to Makeup Store Administration</h1>
    <form method="post" action="login.php">
    <label for="name">Name</label>
    <input type="text" id="name" name="name">
    <label for="password">Password</label>
    <input type="password" id="password" name="password">
    <br><br>
    
    <input type="submit" name="login"
                class="button" value="Login" />
    <!-- <input type="submit" name="signUp" formaction="registration.php"
                class="button" value="Sign Up" /> -->
    <p>
  		Not yet a member? <a href="registration.php">Sign up</a>
  	</p>
    </form>
   

</body>
</html>