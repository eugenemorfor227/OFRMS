<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
    <title>Manage Profile</title>
</head>
<style>
    /*Topnav*/
    .body{
        margin: 0;
        padding: 0;
        height: 100%;
        font-family: 'Times New Roman', Times, serif;
        background-color:blue;
    }
    .topnav {
  overflow: hidden;
  background-color:rgb(24, 24, 59);
  
}

.topnav a {
  float: right;
  display: block;
  color: #000000;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #5361df;
  color: white;
}

.topnav .icon {
  display: none;
}




@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
/*side nav*/
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(8, 10, 43);
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  margin-top:8px ;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
  transition: 0.5s;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
/*dropdown*/
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
  font-family: 'Times New Roman', Times, serif;
}

.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}
.active {
  background-color: rgb(48, 46, 179);
  color: white;
}
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 12px;
}
.fa-caret-down {
  float: right;
  padding-right: 8px;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
/*new Team styling*/
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password],input[type=file],input[type=number],input[type=email] {
  width: 93%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  border-radius: 6px;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}


hr {
  border: 1px solid #04061460;
  margin-bottom: 25px;
}


.registerbtn {
  background-color: #4c66af;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 96%;
  transition: .3s ease;
  margin-left: px;
  border-radius: 6px;
  font-size: 17px;
}

.registerbtn:hover {
  background-color: rgb(27, 124, 153);
}
.box{
    margin:30px;
    width: 80%;
    background: url(bg.jpg);
    box-shadow: 7px 7px 6px 3px rgba(0, 0, 0, 0.925);
    border-radius: 6px;
    background-size: cover;
    background-repeat: no-repeat;
    color: white;

}

</style>
<body>
     <!--topnav-->
     <div class="topnav" id="myTopnav">
        <span style="margin-left: 20px; font-size:30px;cursor:pointer; color:white;" onclick="openNav()">&#9776;</span>
        <a href="Profile.php" class="active">Profile <i style="padding-left: 5px;" class="fa fa-caret-down"></i></a>
        
        
        
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </div>

<!--Sidenav-->

      <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <h2 style="text-align: center; color:white;">OFRMS | Admin</h2><hr>
        <a href="Admin_dashboard.php">Dashboard</a>
        <hr>
        
        <button class="dropdown-btn"> <i style="padding-right: 5px;" class="fa fa-users"></i> Teams 
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
          <a href="Create_new_team.php">Create New Team</a>
          <a href="#">Manage Teams</a>
        </div>
        <button class="dropdown-btn"><i style="padding-right: 7px;" class="fa fa-fire"></i>Fire Alerts 
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
          <a href="#">New Alerts</a>
          <a href="#">Assigned Requests</a>
          <a href="#">Teams On The Way</a>
          <a href="#">Relief Work In Progress</a>
          <a href="#">Completed Requests</a>
          <a href="#">all Requests</a>
        </div>
        <button class="dropdown-btn"><i style="padding-right: 7px;" class="fa fa-file"></i>Reports
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
          <a href="#">B/W date</a>
          <a href="Search_report.php">Search Report</a>
         
        </div><hr>
        <a href="Website_setting.php"><i class="fa fa-gear"></i>Website Setting</a>
        <a href="index.php"><i class="fa fa-home"></i>Home</a>
      </div><hr>
      <div  style="color: rgb(255, 255, 255); text-shadow: 2px 3px 3px rgb(253, 253, 255); text-align: center; padding: 5px; background-color:rgb(25, 25, 51)"><h1> My Profile</h1></div><hr>

       <!--Create team home-->
       <div class="box">
       <form action="">
        <div class="container">
          <h1>Manage Your Profile Details</h1>
          
          <hr>
      
          <label for="fname"><b>First Name</b></label>
          <input type="text" placeholder="First Name" name="fname" required>
      
          <label for="name"><b>Lastname</b></label>
          <input type="text" placeholder="Last name" name="lname" required>

          <label for="number"><b>Phonenumber</b></label>
          <input type="number" placeholder="Phone number" name="number" required>

          <label for="email"><b>Email</b></label>
          <input type="email" placeholder="Email" name="email" required>

          <label for="location"><b>Location</b></label>
          <input type="text" placeholder="Your Location" name="location" required>
         
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="@Username" name="username" required>
          <hr>
         
      
          <button type="submit" class="registerbtn">Update</button>
        </div>
        
      </form>
      </div>
      


      <!--Sidenav-->
      <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
        }
        
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }
        </script>

<script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;
    
    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var dropdownContent = this.nextElementSibling;
      if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
      } else {
      dropdownContent.style.display = "block";
      }
      });
    }
    </script>
</body>
</html>