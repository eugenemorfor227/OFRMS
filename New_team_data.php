<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css" />
   
    <title>OFRMS Home</title>
</head>
<body>

<?php 
 $server = "localhost";
 $username = "root";
 $password = "";
 $dbname = "teams";


 $conn = mysqli_connect($server, $username, $password, $dbname);

 if(isset($_POST['submit'])){
    if(!empty($_POST['name']) && !empty($_POST['leader']) && !empty($_POST['number']) && !empty($_POST['members'])){

        $name = $_POST['name'];
        $leader = $_POST['leader'];
        $number = $_POST['number'];
        $members = $_POST['members'];


        $query = "insert into members(name,leader,number,members)values('$name','$leader','$number','$members')";
        $run = mysqli_query($conn, $query) or die(mysqli_error());
        if($run){
            echo "<div style='height: 200px; width: 400px; background-color:white; box-shadow:3px 3px 6px 3px rgba(0,0,0,0.4); margin-left:33%; margin-top:100px;' >  
            <p style='color:green; font-size:20px; text-align:center; padding-top:40px'>Team Successfuly Created!</p>  
            <a href='Admin_Dashboard.php'><button class='btn btn-primary m-4 p-2'><i class='bi-speedometer '></i> Back To Dashboard
                  
                  </button></a>
     
            </div> 
            
            ";
        }
        else{
            echo "Team not Created";
        }
     }
        else{
            echo "All Fields Requred";
        }
 }



?>



</body>
</html>