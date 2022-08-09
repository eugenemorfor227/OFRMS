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






    <h1>Incedent report Details</h1>

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
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "reportform";

                $connection = new mysqli($servername,$username,$password,$database);

                if($connection -> connect_error){
                    die("connection failed" . $connection -> connect_error);
                }
                $sql = "SELECT * FROM submit";
                $result =$connection -> query($sql);

                if(!$result){
                    die("valid query:" . $connection -> error);
                }
                while($row = $result -> fetch_assoc()){
                    echo "<tr>
                       <td>". $row["ID"] ."</td>
                       <td>". $row["Name"] ."</td>
                       <td>". $row["Phonenumber"] ."</td>
                       <td>". $row["Location"] ."</td>
                       <td>". $row["Message"] ."</td>
                       <td><button class='btn btn-primary btn-sm'>Respond</button></td>
                       <td><a href='sample.php?rn=$row[Name]'> <button class='btn btn-danger btn-sm'>Delete</button></a></td>

                    </tr>";
                }



            ?>
        </tbody>
    </table>

            </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>