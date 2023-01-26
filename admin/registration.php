<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="css/AdminStyle.css">
  <script>
        function validate(){

            var a = document.getElementById("password1").value;
            var b = document.getElementById("password2").value;
        if(a.length < 8) {  
            alert("Password length must be atleast 8 characters");  
            return false;  
        }  
            if (a!=b) {
               alert("Passwords do no match");
               return false;
            }
        }
     </script>
</head>
<body>


  <div class="form">
            <h1>Register Now</h1>
            <form onSubmit="return validate()" action="registration-finish.php" method="post">
                <label for="name"> Name*</label>
                <input type="text" name="name" id="name" required>
                <label for="password1">Password*</label>
                <input type="password" name="password1" id="password1" required>
                <label for="password2">Confirm Password*</label>
                <input type="password" placeholder="Please enter same password." name="password2" id="password2" required>
               
                <br><br>
                <input type="submit" value="Register">

            <p>
                Already a member? <a href="index.php">Login</a>
            </p>
             
            </form>
        </div>

  
  	
  
</body>
</html>