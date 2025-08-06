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
            echo "Resident deleted.";
          }
          else{
            echo "Could not delete";
          }
        
?>
<a href = "index.php" style="font-size: 28px";>Go to Home</a>
</body>
</html>