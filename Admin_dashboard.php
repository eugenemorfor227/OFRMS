<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
    <title>Admin_dashboard</title>
</head>
<style>
  html{
    scroll-behavior:smooth;
  }
    .body{
        margin: 0;
        padding: 0;
        height: 100%;
        font-family: 'Times New Roman', Times, serif;
        background:red;
    }
    .topnav {
  overflow: hidden;
  background-color:rgb(24, 24, 59);
  border-top-right-radius:6px;
  border-top-left-radius:6px;
  
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
/*dasboard body*/
.tablink {
    background:linear-gradient(grey,white,grey);
  color: rgb(0, 0, 0);
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 15px 16px;
  font-size: 17px;
  width: 25%;
  transition: .3s;
  border-left: 1px solid black;
 
}
.tablink:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(7px);
}

.tablink:hover {
  background-color: rgb(118, 117, 219);
 
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: white;
  display: none;
  padding: 100px 20px;
  height: 300px;
  background-color: black;
  border: 2px solid black;
  text-align: center;
}

#Home {background:url(bg.jpg);
 background-repeat: no-repeat;
 background-size: cover;
}
#News {background:url(bg.jpg);
  background-repeat: no-repeat;
 background-size: cover;
}
#Contact {background:url(bg.jpg);
  background-repeat: no-repeat;
 background-size: cover;
}
#About {background:url(bg.jpg);
  background-repeat: no-repeat;
 background-size: cover;
}

p{
  text-align: center;
  font-size: 24px;
}
h3{
  background: rgba(0, 0, 0, 0.589);
  padding: 10px;
  border-left: 7px solid rgb(255, 255, 255);
  border-right: 7px solid rgb(255, 255, 255);
  border-radius: 5px;
  padding-top: 30px;
  padding-bottom: 30px;
  
}
.details{
  background-color: rgb(79, 79, 201);
  padding: 9px;
  width: 200px;
  height: 50px;
  color: white;
  font-size: 17px;
  border: none;
  border-radius: 5px;
  transition: .3s ease;
  cursor: pointer;
}
.details:hover{
  background-color: rgb(5, 45, 46);
}

.footer{
   
   height: 150px;
   width: 100%;
   background-color: rgb(14, 14, 41);
}
.footer h2{
   text-align: center;
   color: rgba(255, 255, 255, 0.342);
   padding-top: 20px;
   
   
}
p a .fa{
  color: white;
  padding-left: 10px;
  font-size: 20px;
  transition: .5s ease background;
}
p a .fa:hover{
   color: turquoise;
}
.footer p{
   text-align: center;
}
footer p a{
   text-decoration: none;
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

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}


/* Add an active class to the active dropdown button */
.active {

  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 12px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

/*Admin login*/
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

hr {
  border: 1px solid #04061460;
  margin-bottom: 25px;
}
.glow {

  color: #fff;
  text-align: center;
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #e60073, 0 0 20px #e60073, 0 0 25px #e60073, 0 0 30px #e60073, 0 0 35px #e60073;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}

.column1 {
  float: left;
  width: 49%;
  padding: 5px 5px;
  
}

.row1 {margin: 0 -5px;}

/* Clear floats after the columns */
.row1:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column1 {
    width: 100%;
    display: block;
    margin-bottom: 10px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 3px 3px 2px 3px rgba(0, 0, 0, 0.5);
  padding: 16px;
  text-align: center;
  background:url("bg.jpg");
  color: white;
  border-radius:4px;
}



</style>
<body>
  <!--topnav-->
    <div class="topnav" id="myTopnav">
        <span style="margin-left: 20px; font-size:30px;cursor:pointer; color:white;" onclick="openNav()">&#9776;</span>
        
        <a href="Profile.php" style="font-size:25px;" class="active">Profile <i style="padding-left: 5px;" class="fa fa-user-circle"></i></a>
        
        
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </div>

      <!--Admin login-->
   

<!--Sidenav-->

      <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <h2 style="text-align: center; color:white;">OFRMS | Admin</h2><hr>
        <a href="Admin_dashboard.php"> <i class="fa fa-tachometer"></i> Dashboard</a>
        <hr>
        <button class="dropdown-btn"> <i style="padding-right: 5px;" class="fa fa-users"></i> Teams 
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
          <a href="Create_new_team.php">Create New Team</a>
          <a href="Teams_data.php">Manage Teams</a>
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
      <div style="color: rgb(255, 255, 255); text-shadow: 2px 3px 3px rgb(253, 253, 255); text-align: center; padding: 5px; background-color:rgb(25, 25, 51)" class="glow"><h1> Dashboard</h1></div>
     <!--dashboard body-->
     <div class="row1">
  <div class="column1">
    <div class="card">
      <p><i style="font-size: 40px;" class="fa fa-eye"></i></p>
      <h3>11+</h3>
      <p>View New</p>
    </div>
  </div>

  <div class="column1">
    <div class="card">
      <p><i  style="font-size: 50px;" class="fa fa-code-fork"></i></p>
      <h3>55+</h3>
      <p>Assigned</p>
    </div>
  </div>
  
  <div class="column1">
    <div class="card">
      <p><i  style="font-size: 50px;" class="fa fa-car"></i></p>
      <h3>100+</h3>
      <p>Team On The Way</p>
    </div>
  </div>
  
  <div class="column1">
    <div class="card">
      <p><i  style="font-size: 50px;" class="fa fa-tasks"></i></p>
      <h3>56+</h3>
      <p>Fire Relief Work In Progress</p>
    </div>
  </div>

  <div class="column1">
    <div class="card">
      <p><i  style="font-size: 50px;" class="fa fa-list"></i></p>
      <h3>90+</h3>
      <p>Completed Requests</p>
    </div>
  </div>

  <div class="column1">
    <div class="card">
      <p><i  style="font-size: 50px;" class="fa fa-globe"></i></p>
      <h3>205+</h3>
      <p>All Requests</p>
    </div>
  </div>
</div>

  <div class="footer">
    <h2>ORMS &copy;2022 </h2>
    <p>
        <a href=""> <i class="fa fa-facebook"></i> </a>
        <a href=""> <i class="fa fa-whatsapp"></i> </a>
        <a href=""> <i class="fa fa-twitter"></i> </a>
        <a href=""> <i class="fa fa-linkedin"></i> </a>
        <a href=""> <i class="fa fa-google"></i> </a>
    </p>
</div>
 
      
      <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
      }
      
      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      }
      </script>

      <!--dasboard responsivenss-->
      <script>
        function openPage(pageName,elmnt,color) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablink");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
          }
          document.getElementById(pageName).style.display = "block";
          elmnt.style.backgroundColor = color;
        }
        
        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
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

  <!--Admin login-->
  <script>
    // Get the modal
    var modal = document.getElementById('id01');
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>

    
         
</body>
</html>