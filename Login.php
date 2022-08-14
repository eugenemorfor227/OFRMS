<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
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
<form action="#" method="POST">
  <div class="container">
    <h1>Login</h1>
    <p>Please fill in this form to Login.</p>
    <hr>

    <label for="number"><b>Phonenumber</b></label>
    <input type="number" placeholder="Phonenumber" name="phonenumber" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Password" name="password" id = "loginData" required>
    <hr>

    <a href="User_dashboard.php" ><button type="button" class="registerbtn">Login</button></a>
     <div class="container1 signin">
     <a href="index.php">Back</a>
    <p>Don't have an account? <a href="Registration.php">Sign up</a>.</p>
  </div>
  </div>
  
 
<!--comented the php because database is functioning already and cant be submited trough github-->
  <?php
  /* $server = "localhost";
   $username = "root";
   $password = "";
   $dbname = "users";
   session_start();
  
  
   $data = mysqli_connect($server, $username, $password, $dbname);
    if($data===false){
        die("connection error");
    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $phonenumber=$_POST["phonenumber"];
        $password=$_POST["password"];

        $sql="select * from login where phonenumber='".$phonenumber."' AND password='".$password."'";

        $result=mysqli_query($data,$sql);
        $row=mysqli_fetch_array($result);

        if($row["usertype"]=="admin"){
            $_SESSION["phonenumber"]=$row["phonenumber"];
            header("location:Admin_dashboard.php");
        }

        else if($row["usertype"]=="user"){
            $_SESSION["phonenumber"]=$phonenumber;
             header("location:User_dashboard.php");
        }
       
        else{
            header("location:Registration.php");
        }
    }*/
  ?>
  
</form>
</body>
</html>