<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<style>
* {
  box-sizing: border-box;
}
.container {
  padding: 16px;
  background-color: white;
  margin-left:10%;
  margin-right:10%;
  margin-bottom:10%;
  box-shadow:3px 3px 6px 3px rgba(0,0,0,0.6);
}
input[type=text], input[type=password], input[type=number] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
.registerbtn {
  background-color: black;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  transition:.3s ease;
  border-radius:6px;

}
.registerbtn:hover{
    background-color:slateblue;
}

.registerbtn:hover {
  opacity: 1;
}
a {
  color: dodgerblue;
}
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
<body>
<form action="" method="POST">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="firstname"><b>Firstname</b></label>
    <input type="text" placeholder="Firstname" name="firstname" required>

    <label for="lastname"><b>Lastname</b></label>
    <input type="text" placeholder="Lastname" name="lastname" required>

    <label for="location"><b>Location</b></label>
    <input type="text" placeholder="Location" name="location" required>

    <label for="number"><b>Phonenumber</b></label>
    <input type="number" placeholder="Phonenumber" name="phonenumber" >

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Password" name="password">
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <a href="User_dashboard.php"><button type="button" name="submit" class="registerbtn">Register</button></a>
     <div class="container1 signin">
     <a href="index.php">Back</a>
    <p>Already have an account? <a href="Login.php">Sign in</a>.</p>
  </div>
  </div>
  
 
</form>



</body>
</html>