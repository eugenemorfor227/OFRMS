<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="admin.css">
    <title>Password Recovery</title>
    <style>
        body{
            background: url(Admin\ Dashboard\ Background.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>

    <div class="container1 " style="margin-top: 100px;">
        <h3 class="text-light" style="text-align: center;">Password Recovery</h3>
           <div class="modal-dialog bg-primary">
             <div class="modal-content">
               <div class="modal-header">
                 <h4 class="modal-title">Step 3</h4>
                
               </div>
               <div class="main" >
               <div class="modal-body">
                 <form action="New_team_data.php" method="POST">
                    <div class="mb-3">
                        <label class="text-dark" for="name">Enter New Password:</label>
                        <input type="email" class="form-control" id="email" name="email">
                      </div>
                      <div class="mb-3">
                        <label class="text-dark" for="name">Retype-Password:</label>
                        <input type="email" class="form-control" id="email" name="email">
                      </div>
                      <div class="modal-footer">
                        <a href="User_Home.php"><button onclick="Done()" type="button" name="next" class="btn btn-primary m-1 p-2" >Confirm</button></a>
                  
                     
                  
                <a href="Password_recovery_step2.php"><button type="button" name="back" class="btn btn-primary m-1 p-2" >Back</button></a>
               </div>
                 </form>
               </div>
               </div>
               
               
             </div>
           </div>
       
         
     </div>


  <Script>
    function Done() {
      alert("Password Recovery Successful");
    }
  </Script>











 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 </body>
 </html>