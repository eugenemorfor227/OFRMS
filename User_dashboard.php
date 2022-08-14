<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
    <title>User Dashboard</title>
</head>
<style>
   body {
  margin: 0;
  font-family: 'Times New Roman', Times, serif;
  background: url(backgrounds/bg.jpg);
  background-repeat: no-repeat;
  background-size: cover;
}

.topnav {
  overflow: hidden;
  background-color: rgb(6, 7, 24);
  position: fixed;
  width: 100%;
}

.topnav a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
 
  color: blue;
 
}

.topnav a.active {
  background-color: #5857b8;
  color: white;
  float: left;
}

.topnav .icon1 {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon1 {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon1 {
    position: absolute;
    right: 0;
    top: 0;
    text-align: center;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
   /*div 1*/
    
 

.column {
    margin-top: 50px;
  float: left;
  width: 90%;
  margin-bottom: 3px;
  padding: 0 20px;
 
}



@media screen and (max-width: 650px) {
  .column {
    width: 90%;
    display: block;
  }
}





.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

.ok{
  width:45%;
  height:40px;
  background-color:#4c74af;
  color:white;
  border:none;
  border-radius:4px;
  cursor:pointer;
  font-size:17px;
}
.ok:hover{
  opacity:1;
}
.progress-container {
  width: 100%;
  height: 8px;
  background: #ccc;
}

.progress-bar {
  height: 8px;
  background:#4c74af;
  width: 0%;
}
/*contact*/

.glow {
  font-size: 80px;
  color: #fff;
  text-align: center;
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 0.5s ease-in-out infinite alternate;
  animation: glow 0.5s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px yellow, 0 0 30px red, 0 0 40px red, 0 0 50px red, 0 0 60px yellow, 0 0 70px yellow;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px yellow, 0 0 40px red, 0 0 50px red, 0 0 60px red, 0 0 70px yellow, 0 0 80px yellow;
  }
}

.open-button1 {
  
  color: blue;
 
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;

  font-size:40px;
  border-radius:65px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}


.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}


.form-container textarea {
  width: 90%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}


.form-container .btn {
  background-color: black;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  border-radius:6px;
  transition:.3s ease;
}
.form-container .btn:hover{
  background-color:slateblue;
}


.form-container .cancel {
  background-color: red;
}


.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
input[type=text], input[type=password], input[type=number] ,.msg {
width: 90%;
padding: 16px;
margin: 5px 0 22px 0;
border: none;
background: none;
border-bottom:2px solid white ;
}

input[type=text]:focus, input[type=password]:focus {
outline: none;
}

/*logon and register*/
.column3 {
  float: left;
  width: 48%;
  margin-bottom: 16px;
  padding: 0 8px;
  padding-top:50px;
}

.card3 {
  box-shadow: 0 4px 8px 0 rgba(255, 255, 255, 0.7);
  margin: 8px;
}
.container3 {
  padding: 16px;
  backdrop-filter:blur(7px);
  margin-bottom:60px;
}

.container3::after, .row3::after {
  content: "";
  clear: both;
  display: table;
}

.title3 {
  color: grey;
}

.button3 {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  border-radius:6px;
  transition:.3s ease;
  font-size:15px;
}

.button3:hover {
  background-color: slateblue;
}

@media screen and (max-width: 650px) {
  .column3 {
    width: 100%;
    display: block;
  }
}
.footer{
   
   height: 100px;
   width: 90%;
   background: linear-gradient(to left rgb(green));

}
.footer h2{
   text-align: center;
   color: rgba(255, 255, 255, 0.342);
   padding-top: 20px;
   
   
}
.footer p{
   text-align: center;
   
}
.footer p a{
  font-size:20px;
   color:white;
}


    </style>
<body>
   
        </head>
        <body>
<!--Navbar-->
    <div class="topnav" id="myTopnav">
      <a href="#home" class="active">OFRMS</a>
      
      <a href="#"><i class="fa fa-sign-out"></i></a>
      <a href="#"><i class="fa fa-user-circle"></i> profile</a>
        <a href="Contact.php"><i class="fa fa-address-card"></i> Contact</a>
        <a href="Report_form.php"><i class="fa fa-info-circle"></i> About</a>
        <a href="#about"><i class="fa fa-home"></i> Home</a>
        <a href="javascript:void(0);" class="icon1" onclick="NavbarIcon()">
        <i class="fa fa-bars"></i></a>
        <div class="header">
         <div class="progress-container">
    <div class="progress-bar" id="myBar"></div>
  </div>  
</div>
</div>
            
 <!--Description section-->
            
              <div class="row">
                <div class="column">
                  <div class="card">
                    <h1 style="text-align: center; color: white;" class="title">Online <span class="glow" style="color: red;">fire</span> reporting Management System</h1>
                    <h3 style="text-align: center; padding: 1.5px; color: rgba(255, 255, 255, 0.514);">Together we continue to empower first responders 
                        with data and insights that drive quality and peformance 
                        improvements accross the entire health and public safety spectrum.</h3>
                 
                   
                  </div>
                 
                  <div class="row3">
  <div class="column3">
    <div class="card3">
      <div class="container3">
        <a href="Report_form.php"><p><button class="button3">Report Incident  <i class="fa fa-file"></i></button></p></a>
      </div>
    </div>
  </div>

  <div class="column3">
    <div class="card3">
      <div class="container3">
        <a href="Database contents/User_display.php"><p><button class="button3">View Status  <i class="fa fa-eye"></i></button></p></a>
      </div>
    </div>
  </div>
</div>
                  </div>
                </div>
<!--chat pop up-->
<button class="open-button1" onclick="openForm()"><i class="fa fa-comments"></i></button>

<div class="chat-popup" id="myForm">
  <form action="" class="form-container">
    <h1>Chat</h1>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<!--footer-->
<!--footer-->
<div class="footer">
    <h2>OFRMS &copy;2022 </h2>
    <p>
        <a href="">Author</a>
    </p>
</div>
       <!--for navbar responsiveness-->
        <script>
            function NavbarIcon() {
              var x = document.getElementById("myTopnav");
              if (x.className === "topnav") {
                x.className += " responsive";
              } else {
                x.className = "topnav";
              }
            }
        </script>

            <!--for admin form pop up-->



<!--scroll detect-->
<script>
window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}
</script>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
<!--Message pop up form-->
<script>
function done() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>
<!--admin form control-->

<!--for login and registration dropdown-->

</body>
</html>