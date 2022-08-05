<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="User home.css">
    <title>Fire Report Data</title>
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




<div class="main m-5">

    <h1>Fire Reports</h1>

    <table class="table">
        <thead style="background:aqua;">
           <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phonenumber</th>
            <th>Location</th>
            <th>Description</th>
            <th>Take Action</th>
            <th>Delete</th>
           </tr>
        </thead>
        <tbody>
           
        </tbody>
    </table>

            </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>