<?php 

$server = "localhost";
 $username = "root";
 $password = "";
 $dbname = "admininfo";
if(isset($_SESSION['username'])==false){
    header("Location: index.php");
}

 $conn = mysqli_connect($server, $username, $password, $dbname);
 
if(isset($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql ="select * from admininfo where username ='$username' AND password='$password'";

    $result=mysqli_query($conn,$sql) or die("Data Retreival Error");

    if(mysqli_num_rows($result) > 0){

       $row=mysqli_fetch_assoc($result);
       $_SESSION['id']=$row['id'];
       $_SESSION['username']=$row['username'];

       header("Location:Admin_dashboard.php");
    } else{
        echo"<p style='text-aligne:center; margin: top 100px;'>Invalid Login Details</p>";
    }
}



 
 



?>