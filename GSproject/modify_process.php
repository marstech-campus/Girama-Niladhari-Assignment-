<html>
    <head>
        <style>
            body{
                background: #FAAA5C;
            }
            h1{
                color:#165511;
                text-align: center;
                text-size:20px;
                text-weight:bold;
            }

            h2{
                color:#AE1614;
                text-align: center;
                text-size:20px;
                text-weight:bold;
            }

        </style>
    </head>
    <body>
<?php


include("config.php");


        if(isset($_POST['submit'])){
          

            session_start(); 
            if(isset($_SESSION['row_data'])) {
            $row = $_SESSION['row_data']; // get data from session
            }

             $id=$row['id'];

          //$id = $_POST['id'];
          $fullname = $_POST['fullname'];
          $dob = $_POST['dob'];
          $nic = $_POST['nic'];
          $address = $_POST['address'];
          $phone = $_POST['phone'];
          $email = $_POST['email'];
          $occupation= $_POST['occupation'];
          $gender= $_POST['gender'];

          

         $result = mysqli_query($mysqli, "UPDATE residents SET full_name = '$fullname', dob = '$dob', nic = '$nic', address ='$address', phone = '$phone', email = '$email', occupation = '$occupation', gender ='$gender' WHERE id = $id");
           

          if($result){
            echo "Resident modifed successfully.";
          }
          else{
            echo "Could not modify the data";
          }
            
        }
          
    ?>
    <a href = "index.php" style="font-size: 28px";> Go to Home </a>
    </body>
    </html>