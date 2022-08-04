<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="User Home.css">
    <title>OFRMS Home</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
        <div class="container">
            <a href="" class="navbar-brand">OFRMS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar ms-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link"><i class="bi bi-house-fill"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#questions" class="nav-link"><i class="bi bi-info-circle-fill"></i>About</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link"><i class="bi bi-person-lines-fill"></i>Contact</a>
                    </li>
                    <li class="nav-item">
                      <li>
                        
                          <button type="button" class="btn btn-primary position-relative fw" data-bs-toggle="modal" data-bs-target="#myModal">
                             Admin 
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                              6
                            </span>
                          </button>
                        
                        
                        <div>
                          <div>
                          </div>
                        </div>
                       </li>
                       <li class="my-4">
                        <hr class="dropdown-divider">
                      </li>
              
                    </li>
                    <form class="d-flex p-3">

                        <input class="form-control me-2" type="search" placeholder="Search fire incident" aria-label="Search"> <i class="bi-search"></i>
          
                        <button class="btn btn-outline-success" type="submit">Search</button>
          
                      </form>
                </ul>
            </div>
        </div>
    </nav>
    <!--for admin pop up-->

    <div class="container bg-info">
        <div class="modal" id="myModal">
          <div class="modal-dialog bg-info">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Admin Login Form</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <form action="submit.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="col-form-label">Username:</label>
                        <input type="text" class="form-control" name="username" id="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="col-form-label">Password:</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>
                    <input type="checkbox"> Remember me
                    <div class="modal-footer">
             <a href="Admin_Dashboard.php"><button name="submit" type="submit" class="btn btn-primary m-1 p-2" >Confirm</button></a>

                <button  type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
                </form>
              </div>
              
              
            </div>
          </div>
        </div>
        
      </div>
      


    <section class="sec1 text-light p-5 p-lg-0 text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                        <h1>Online<span class="text-danger"> Fire </span>Reporting Management System</h1>
                        <p class="lead my-4">
                          <b>Together we continue to empower first responders with data
                              and insights that drive quality and performance improvements across
                              the entire health and public safety spectrum.
                          </b>
                        </p>
                        
                </div>
                <img class=" img img-fluid w-40  d-sm-block" src="User Home Picture.png" alt="">
            </div>
        </div>
    </section>


    <section class="sec2 text-light  p-3">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center">
                <button class="btn btn-primary p-2" type="button" data-bs-toggle="modal" data-bs-target="#report">
                                              
                    <i class="bi bi-flag-fill"></i> Report Fire Incident
            
                  </button>
                 <a href="User_display.php"><button class="btn btn-primary m-4 p-2"><i class="bi-eye "></i>View Status
                  
                  </button></a>
     
            </div>                                    

       </div>
    </section>


      <!--report form-->

      
    <div class="container bg-info">
        <div class="modal" id="report">
          <div class="modal-dialog bg-info">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Incident Report Login Form</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <form action="submit.php" method="POST">
                    <div class="mb-3">
                        <label for="Name" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="phonenumber" class="col-form-label">Phonenumber:</label>
                        <input type="number" class="form-control" name="phonenumber" id="Phonenumber" required>
                    </div>
                    <div class="mb-3">
                        <label for="location" class="col-form-label">Location:</label>
                        <input type="text" class="form-control" name="location" id="location" required>
                    </div>
                    <div class="">
                        <label for="location" class="col-form-label">Describe Incident:</label>
                        <textarea name="message" id="message" cols="30" rows="3" placeholder="Write something...."></textarea>
                    </div>
                    <div class="modal-footer">
               <button name="submit" type="submit" class="btn btn-primary m-1 p-2" >Submit</button>

                <button  type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </form>
              </div>
              
              </div>
              
            </div>
          </div>
        </div>
        
      </div>


    <footer class="p-5 bg-dark text-white text-center position-relative">

        <div class="container">
      
            <p class="lead">Copyright &copy; 2022 OFRMS</p>
      
            <a href="#" class="position-absolute buttom-0 end-0 p05">
      
               <i class="bi bi-arrow-up-circle h1"></i>
      
            </a>
      
        </div>
      
      </footer>


      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>