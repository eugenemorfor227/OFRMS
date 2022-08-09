<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
    <title>Home</title>
</head>
<style>
   body {
  margin: 0;
  font-family: 'Times New Roman', Times, serif;
  background: url(bg.jpg);
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

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
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
  width: 40%;
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
/*report form*/
.container {

  
  margin: 20px;
  width: 70%;
  float: right;
  background-color: rgba(0, 0, 0, 0.219);

 
  padding: 8px;
  color: white;
 
}

/* Full-width input fields */
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

/* Set a style for the submit button */
.btn {
  background-color: #4c74af;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  margin-top: 10px;
  transition: .3s ease;
  border-radius: 6px;
  box-shadow: 0 9px #999;
}
.btn:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(6px);
}
.btn1{
    background-color: #4c74af;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 68%;
  opacity: 0.9;
  margin-left: 22%;
  margin-top: 10%;
  transition: .3s ease;
  border-radius: 6px;
  box-shadow: 0 9px #999;
}
.btn1:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(7px);
}


.btn:hover {
  opacity: 1;
  background-color: rgb(44, 104, 128);
}
.btn1:hover {
  opacity: 1;
  background-color: rgb(44, 104, 128);
}

.btn-group button {
  background-color: #4CAF50;
  border: 1px solid green; 
  color: white;
  padding: 15px 29px; 
  cursor: pointer;
  margin-left: 30%;
 margin-top: 15%;

}
.btn-group button:hover {
  background-color: #3e8e41;
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

/*admin*/
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}



.dropdown {
  float: right;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
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
.chip {
  display: inline-block;
  padding: 0 25px;
  height: 50px;
  font-size: 16px;
  line-height: 50px;
  border-radius: 25px;
  background-color: #f1f1f1;
 
}

.chip img {
  float: left;
  margin: 0 10px 0 -25px;
  height: 50px;
  width: 50px;
  border-radius: 50%;
}
.closebtn {
  padding-left: 10px;
  color: #888;
  font-weight: bold;
  float: right;
  font-size: 20px;
  cursor: pointer;
}

.closebtn:hover {
  color: #000;
}
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

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
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

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}


    </style>
<body>
   
        </head>
        <body>
       
            <div class="topnav" id="myTopnav">
                <a href="#home" class="active">OFRMS</a>
                <div class="dropdown">
    <button id="myBtn"  onclick="document.getElementById('id01').style.display='block'"  class="dropbtn">Admin <i style="font-size:20px;" class="fa fa-user-circle"></i>
    </button>
</div>
   
                <a href="#contact"><i class="fa fa-address-card"></i> Contact</a>
                <a href="#about"><i class="fa fa-info-circle"></i> About</a>
                <a href="#about"><i class="fa fa-home"></i> Home</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                  <i class="fa fa-bars"></i>
                </a>
                <div class="header">
  <div class="progress-container">
    <div class="progress-bar" id="myBar"></div>
  </div>  
</div>
              </div>
            
              <!--div 1-->
            
              <div class="row">
                <div class="column">
                  <div class="card">
                    <h1 style="text-align: center; color: white;" class="title">Online <span class="glow" style="color: red;">fire</span> reporting Management System</h1>
                    <h3 style="text-align: center; padding: 1.5px; color: rgba(255, 255, 255, 0.514);">Together we continue to empower first responders 
                        with data and insights that drive quality and peformance 
                        improvements accross the entire health and public safety spectrum.</h3>
                    <img src="User Home Picture.png" alt="Jane" style="width:100%">
                   
                  </div>
                </div>
              
                <div class="column">
                  <div class="card">
                  
                    <form action="Report_submit.php" class="container" method="POST">
                        <h1>Report A <span style="color: red;">Fire</span> incedent</h1>
                    
                        <label for="name"><b>Name</b></label>
                        <input type="text" placeholder="Name" name="name" id="name" required>

                        <label for="email"><b>Phonenumber</b></label>
                        <input type="text" placeholder="Phonenumber" name="phonenumber" id="phonenumber" required>
                        
                        <label for="Location"><b>Email</b></label>
                        <input type="text" placeholder="Enter Location" name="location" required>
                    
                    
                        <label for="psw"><b>describe incedent</b></label>
                       <textarea class="meg" placeholder="Enter report here" name="message" id="message" cols="30" rows="2"></textarea>
                    
                        <button name="submit"  style="font-size: 17px;" type="submit" class="btn"> <i class="fa fa-flag"></i> submit report</button>
                      </form>
                   
                  </div>
                  <a href="User_display.php"><button style="font-size: 17px;"  type="submit" class="btn1"> <i class="fa fa-eye"></i> View Status </button></a>
                </div>
                </div>
 
        </form>
     </div>

                    <!--admin popup form-->
                    

<!-- The Modal -->
<div id="myModal" class="modal">
    <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Admins Only</h2>
    </div>
    <div class="modal-body">
      <div id="id01" class="modal2">
        <form action="submit1.php" class="modal2-content" id="form" method="POST">
          <div class="container2">
            <h1>Admin Login</h1>
            <hr>
            <label for="email"><b>Email</b></label><br>
            <input type="text" class="form-control" name="username" id="username" required><br>
      
            <label for="psw"><b>Password</b></label><br>
            <input type="password" class="form-control" name="password" id="password" required><br>
            
            <label>
              <input id="myCheck" onclick="done()" type="checkbox" > Remember me
            </label>
            <p id="text" style="display:none">Checkbox is CHECKED!</p>
            <div class="clearfix">
            <a href="Admin_dashboard.php"><button id="loader" class="ok" name="submit"  type="submit" class="signupbtn2">Login</button></a>
              <button class="ok" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn2">Cancel</button>
              
            </div><br>
            Forgot <a href="">Password?</a>
          </div>
        </form>
      </div>
    </div>
    <div class="modal-footer">
      <h3>Admin Authentication</h3>
    </div>
  </div>

</div>

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

<div class="footer">
    <h2>OFRMS &copy;2022 </h2>
    <p>
        <a href=""> <i class="fa fa-facebook"></i> </a>
        <a href=""> <i class="fa fa-whatsapp"></i> </a>
        <a href=""> <i class="fa fa-twitter"></i> </a>
        <a href=""> <i class="fa fa-linkedin"></i> </a>
        <a href=""> <i class="fa fa-google"></i> </a>
    </p>

    <div class="chip">
  <img src="bg.jpg" alt="Person" width="96" height="96">
  Eugene Morfore
  <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
</div>
</div>

       
        <script>
            function myFunction() {
              var x = document.getElementById("myTopnav");
              if (x.className === "topnav") {
                x.className += " responsive";
              } else {
                x.className = "topnav";
              }
            }
            </script>
            <!--for admin form pop up-->
            <script>

var modal = document.getElementById('id01');


window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
           
</script>

<script>
  // Get the modal
  var modal = document.getElementById("myModal");
  
  // Get the button that opens the modal
  var btn = document.getElementById("myBtn");
  
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
  
  // When the user clicks the button, open the modal 
  btn.onclick = function() {
    modal.style.display = "block";
  }
  
  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }
  
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
  </script>


<script>
// When the user scrolls the page, execute myFunction 
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

<script>
  const name = document.getElementById('name')
  const password = document.getElementById('password')
  const form = document.getElementById('form')

  form.addEventListener('submit', (e) =>{
    let message = []
    if(name.value === '' || name.value == null){
      alert('name is required')
    }

    if(password.length <= 6){
      message.push('password must be more than 6 characters')
    }
    if(message.lenght === >0){
      e.preventDefault()
      errorElement.innerText = message.join(',')
    }
    e.preventDefault()
  })
</script>
</body>
</html>