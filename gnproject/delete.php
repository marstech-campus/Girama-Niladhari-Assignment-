<html>
    <head>
        
    </head>
    <body>

<?php
include("config.php");



            session_start(); 
            if(isset($_SESSION['row_data'])) {
            $row = $_SESSION['row_data']; // get data from session
            }


            $id=$row['id'];


          $result = mysqli_query($mysqli,"DELETE FROM residents WHERE id=$id");


          if($result){
            echo '<div style="color: red; font-weight: bold;font-size: 80px; margin-top:80px;"> <center>"Resident deleted."</center> </div>';
          }
          else{
            echo "Could not delete";
          }
        
?>
<a href = "index.php" style="font-size: 28px";>Go to Home</a>
</body>
</html>