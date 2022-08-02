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
    <title>Manage Website</title>
    <style>
      body::before{
    display: block;
    content: '';
    height: 60px;
}
body{
    background:url(photos/Admin\ Dashboard\ Background.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    font-family: 'Times New Roman', Times, serif;
    font-weight: bold;
}

@media(min-width: 768px){
    .news-input{
        width: 50%;
    }
}
.sec1{
    background: rgba(250, 249, 249, 0.288);
    backdrop-filter: blur(10px);
}
.sec2{
    background: rgba(250, 249, 249, 0.288);
    backdrop-filter: blur(10px);
}
.nav-link{
    color: white;
}
.login-form{
    width: 500px;
    height: 300px;
   
}
.img{
   width: 150px;
   height: 150px;
   margin-left: 33%;
   margin-top: 15px;
   border-radius: 85px;
}
h3{
    text-align: center;
}
    </style>
</head>
   
<body>
   
<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <!--sidebar button-->
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
      <span class="navbar-toggler-icon"></span>Menu
    </button>
    <!--sidebar button-->
    <a class="navbar-brand fw-bold" href="#">OFRMS | Admin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
     
       
      <form class="d-flex ms-auto">
        <div class="input-group my-2 my-lg-0">
          <input type="text" class="form-control" placeholder="Search.." aria-label="Recipient's username" aria-describedby="button-addon2">
          <button class="btn btn-primary" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
        </div>
      </form>
      <ul class="navbar-nav mb-2 mb-lg-0">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-person-fill"></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item fw-bold" href="Edit_profile.php">Edit Profile</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item fw-bold" href="change_password.php">Change Password</a></li>
        </ul>
      </li>
      </ul>
    </div>
  </div>
</nav>
<!--navbar-->

<!--off canvas menu-->

<div class="offcanvas offcanvas-start bg-dark text-light sidebar-nav" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
 
  <div class="offcanvas-body p-0">
     <nav class="navbar-dark">
       <ul class="navbar-nav">
         <li>
            <a href="Admin_Dashboard.php" class="navlink px-3 active">
              <span><i class="bi bi-speedometer2 me-2"></i></span>
              <span>Dashboard</span>
            </a>
         </li>
         <li class="my-4">
           <hr class="dropdown-divider">
         </li>
         <!--teams-->
         <li>
          <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
          <span class="me-2"><i class="bi bi-people"></i></span>
          <span>Teams</span>
          <span class="right-icon ms-auto"><i class="bi bi-chevron-down"></i></span>
          </a>
          <div class="collapse" id="collapseExample">
            <div>
             <ul class="navbar-nav ps-3">
               <li>
                 <a href="Create_new_team.php" class="nav-link ps-3">
                  <span class="me-2"><i class="bi bi-plus"></i></span>
                  <span>Add Team</span>
                 </a>
               </li>
               <li>
                <a href="" class="nav-link ps-3">
                 <span class="me-2"><i class="bi bi-kanban-fill"></i></span>
                 <span>Manage Teams</span>
                </a>
              </li>
             </ul>
            </div>
          </div>
         </li>
         <!--fire relief-->
         <li>
          <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#fire-alerts" role="button" aria-expanded="false" aria-controls="collapseExample">
          <span class="me-2"><i class="bi bi-bell-fill"></i></span>
          <span>Fire Alerts</span>
          <span class="right-icon ms-auto"><i class="bi bi-chevron-down"></i></span>
          </a>
          <div class="collapse" id="fire-alerts">
            <div>
             <ul class="navbar-nav ps-3">
               <li>
                 <a href="#new-alerts" class="nav-link ps-3">
                  <span>New alerts</span>
                 </a>
               </li>
               <li>
                <a href="#assigned" class="nav-link ps-3">
                 <span>Assigned Requests</span>
                </a>
              </li>
              <li>
                <a href="#teams-on-the-way" class="nav-link ps-3">
                 <span>Teams On The Way</span>
                </a>
              </li>
              <li>
                <a href="#fire" class="nav-link ps-3">
                 <span>Relief Work In Progress</span>
                </a>
              </li>
              <li>
                <a href="#complete" class="nav-link ps-3">
                 <span>Completed Requests</span>
                </a>
              </li>
              <li>
                <a href="#all" class="nav-link ps-3">
                 <span>All requests</span>
                </a>
              </li>
             </ul>
            </div>
          </div>
         </li>
         <!--reports-->
         <li>
          <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#reports" role="button" aria-expanded="false" aria-controls="collapseExample">
          <span class="me-2"><i class="bi bi-flag-fill"></i></span>
          <span>Reports</span>
          <span class="right-icon ms-auto"><i class="bi bi-chevron-down"></i></span>
          </a>
          <div class="collapse" id="reports">
            <div>
             <ul class="navbar-nav ps-3">
               <li>
                 <a href="" class="nav-link ps-3">
                  <span>B/W Date</span>
                 </a>
               </li>
               <li>
                <a href="Search_report.php" class="nav-link ps-3">
                 <span>Search</span>
                </a>
              </li>
             </ul>
            </div>
          </div>
         </li>
         <li class="my-4">
          <hr class="dropdown-divider">
        </li>

        <!--home-->
        <li>
          <a class="nav-link px-3 sidebar-link" href="index.php">
          <span class="me-2"><i class="bi bi-house"></i></span>
          <span>Home</span>
          <span class="right-icon ms-auto"></span>
          </a>
          <div>
            <div>
            </div>
          </div>
         </li>
         <!--setting-->
         <li>
          <a class="nav-link px-3 sidebar-link" href="wesite_setting.php">
          <span class="me-2"><i class="bi bi-gear-fill"></i></span>
          <span>Website Setting</span>
          <span class="right-icon ms-auto"></span>
          </a>
          <div>
            <div>
            </div>
          </div>
         </li>

         <li>
          <a class="nav-link px-3 sidebar-link" href="#">
            <button type="button" class="btn btn-primary position-relative">
              Notifications
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                99+
                <span class="visually-hidden">unread messages</span>
              </span>
            </button>
          
          </a>
          <div>
            <div>
            </div>
          </div>
         </li>
         <li class="my-4">
          <hr class="dropdown-divider">
        </li>

        


       </ul>
     </nav>
  </div>
</div>
<!--off canvas menu-->

<main class="mt-5 pt-3">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 fw-bold text-light fs-3">
     
      </div>
    </div>
   

    <div class="container ">
       <h3 class="text-light" style="text-align: center;">Manage Website</h3>
          <div class="modal-dialog bg-info">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Update Website Info</h4>
              </div>
              <div class="pic">
                 <img class="img" src="Admin Dashboard Background.jpg" alt="">
               </div>
               <h3>Current Logo</h3>
              <div class="modal-body">
                <form action="">
                    <div class="mb-3">
                        <label for="website title" class="col-form-label">Website Title:</label>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="Picture" class="col-form-label">Website Logo:</label>
                        <input type="file" class="form-control" name="password" id="password">
                    </div>
                    
                </form>
              </div>
              
              <div class="modal-footer">
               <a href="Admin Dashboard.html"><button type="button" class="btn btn-primary m-1 p-2" >Save Changes</button></a>

                <button  type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
              </div>
              
            </div>
          </div>
      
        
    </div>
     

    </div>
  </div>
</main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>