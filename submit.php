<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css" />
    <title>OFRMS Home</title>
</head>
<body>

<?php 
 $server = "localhost";
 $username = "root";
 $password = "";
 $dbname = "reportform";


 $conn = mysqli_connect($server, $username, $password, $dbname);

 if(isset($_POST['submit'])){
    if(!empty($_POST['name']) && !empty($_POST['phonenumber']) && !empty($_POST['location']) && !empty($_POST['message'])){
        $name = $_POST['name'];
        $phonenumber = $_POST['phonenumber'];
        $location = $_POST['location'];
        $message = $_POST['message'];


        $query = "insert into submit(name,phonenumber,location,message)values('$name','$phonenumber','$location','$message')";
        $run = mysqli_query($conn, $query) or die(mysqli_error());
        if($run){
            echo "<div style='height: 200px; width: 400px; background-color:white; box-shadow:3px 3px 6px 3px rgba(0,0,0,0.4); margin-left:33%; margin-top:100px;' >  
            <p style='color:green; font-size:20px; text-align:center; padding-top:40px'>We have recieved your submition and will get back to you shortly!</p>  
            <a href='User_Home.php'><button class='btn btn-primary m-4 p-2'><i class='bi-house '></i> Back Home
                  
                  </button></a>
     
            </div> 
            
            ";
        }
        else{
            echo "<div style='height: 200px; width: 400px; background-color:white; box-shadow:3px 3px 6px 3px rgba(0,0,0,0.4); margin-left:33%; margin-top:100px;' >  
            <p style='color:red; font-size:20px; text-align:center; padding-top:40px'> Ooops! Your form has not been submited please try again</p>  
            <a href='User_Home.php'><button class='btn btn-primary m-4 p-2'><i class='bi-house '></i> Back Home
                  
                  </button></a>
     
            </div> 
            
            ";
        }
     }
        else{
            echo "<div style='height: 200px; width: 400px; background-color:white; box-shadow:3px 3px 6px 3px rgba(0,0,0,0.4); margin-left:33%; margin-top:100px;' >  
            <p style='color:red; font-size:20px; text-align:center; padding-top:40px'>All input fields required!</p>  
            <a href='User_Home.php'><button class='btn btn-primary m-4 p-2'><i class='bi-house '></i> Back Home
                  
                  </button></a>
     
            </div> 
            
            ";
        }
 }



?>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>