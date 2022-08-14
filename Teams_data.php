<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css" />
    <title>Teams</title>
</head>
<body style="margin:50px;">
    <h1>Teams</h1>

    <table class="table">
        <thead style="background:aqua;">
           <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Leader</th>
            <th>Number</th>
            <th>Members</th>
            <th>Creation_date</th>
            <th>Update</th>
            <th>Delete</th>
           </tr>
        </thead>
        <tbody>
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "teams";

                $connection = new mysqli($servername,$username,$password,$database);

                if($connection -> connect_error){
                    die("connection failed" . $connection -> connect_error);
                }
                $sql = "SELECT * FROM members";
                $result =$connection -> query($sql);

                if(!$result){
                    die("valid query:" . $connection -> error);
                }
                while($row = $result -> fetch_assoc()){
                    echo "<tr>
                       <td>". $row["ID"] ."</td>
                       <td>". $row["Name"] ."</td>
                       <td>". $row["Leader"] ."</td>
                       <td>". $row["Number"] ."</td>
                       <td>". $row["Members"] ."</td>
                       <td>". $row["Creation_date"] ."</td>
                       <td><button class='btn btn-primary btn-sm'>update</button></td>
                       <td><button class='btn btn-danger btn-sm'>Delete</button></td>
                    </tr>";

        
                }
       

            ?>
        </tbody>
    </table>

           <div >  
          
            <a href='Admin_dashboard.php'><button class='btn btn-primary m-4 p-2'><i class='bi-speedometer '></i> Back To Dashboard
                  
                  </button></a>
     
            </div> 
</body>
</html>