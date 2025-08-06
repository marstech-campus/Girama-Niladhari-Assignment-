<HTML lang="en">
    <HEAD>
        <TITLE>Add Residents </TITLE>
        <style>
            body{
                display: flex;
                flex-direction:column;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                margin: 0;
                background: linear-gradient(45deg,#74512D, #4a4a4a);
                font-family: 'Arial', sans-serif;
            }
            form{
               
                background:#FCB454;
                backdrop-filter: blur(10px);
                border-radius: 15px;
                padding: 30px;
                width: 400px;
                box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
                border: 1px solid rgba(255, 255, 255, 0.18);
                
            }

            label {
            display: block; 
            margin: 10px 0;
            }   

            input, select, textarea {
            width: 100%;   
            padding: 5px;
             }

            button {
            margin-top: 15px;
            padding: 8px 20px;
            color: rgb(255, 255, 255);
            background: rgb(56, 26, 6);
            display: flex;
            margin: 0 auto;
            align-self: center; 
            width: auto; 
            padding: 12px 40px; 
           
            }
            h1{
                color:#FFFFFF;
                text-align: center;
                margin-bottom: 40px;
                
            }
            h2{
                color:#165511;
                text-align: center;
                text-size:20px;
                text-weight:bold;
            }
            h3{
                text-align: center;
            }
            .error{color: #FF0000;}
        </style>

    </HEAD>
    <BODY>
        <?php
        $fullnameerr = $doberr = $nicerr = $addresserr = $phoneerr = $emailerr = $gendererr = "";
        $fullname = $dob = $nic = $address = $phone = $email = $gender = "";

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //name validation
            if (empty($_POST["fullname"])) 
            {
              $fullnameerr = "Full Name is required";
            } 
            else 
            {
              $fullname = test_input($_POST["fullname"]);
              // check if name only contains letters and whitespace
              if (!preg_match("/^[a-zA-Z-' ]*$/",$fullname)) {
                $fullnameerr = "Only letters and white space allowed";
              }
            }

            //date of birth validation
            if (empty($_POST["dob"])) 
            {
              $doberr = "Date of birth is required";
            } 

            //NIC validation
            if (empty($_POST["nic"])) 
            {
              $nicerr = "NIC  is required";
            } 
            else
            {
                $nic = test_input($_POST["nic"]);
              if (!preg_match("/^([0-9]{9}[VX]|[0-9]{12})$/",$nic)) {
                $nicerr = "Invalid NIC. Only numbers, V and X are allowed ";
              }
            }

            //address validation
            if (empty($_POST["address"])) 
            {
              $addresserr = "Address is required";
            } 

             //phone validation
             if (empty($_POST["phone"])) 
             {
               $phoneerr = "Phone number is required";
             } 
             else
             {
                 $phone = test_input($_POST["phone"]);
               if (!preg_match("/^[0-9]{10}$/",$phone)) {
                 $phoneerr = "Invalid phone number.Only 10 numbers allowed ";
               }
             }
             //email validation
             if (empty($_POST["email"])) {
                $emailerr = "Email is required";
              } else {
                $email = test_input($_POST["email"]);
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailerr = "Invalid email format";
                }
              }

              //gender validation
              if (empty($_POST["gender"])) {
                $gendererr = "Gender is required";
              }

        }

        //sending data from php to database
        include("config.php");


        if(isset($_POST['submit'])){
          $fullname = $_POST['fullname'];
          $dob = $_POST['dob'];
          $nic = $_POST['nic'];
          $address = $_POST['address'];
          $phone = $_POST['phone'];
          $email = $_POST['email'];
          $occupation= $_POST['occupation'];
          $gender= $_POST['gender'];

          $result = mysqli_query($mysqli, "insert into residents (id,full_name, dob, nic, address, phone, email, occupation, gender ) value('', '$fullname', '$dob', '$nic', '$address', '$phone', '$email', '$occupation', '$gender')");

          if($result){
            echo '<div style="color: yellow; font-weight: bold;font-size: 30px; margin-top:20px;">"Resident registered successfully." </div>'; 
          }
          else{
            echo "Data not stored";
          }
        }
        ?>
       
        <h1>Grama Niladhari Residents Management System</h1>
        
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <h3>Register Form</h3>

            <label>Full Name  <input type="text" name="fullname" id="fullname" ></label>
            <span class="error">* <?php echo $fullnameerr;?></span>
           
            <label>Date Of Birth <input type="date" name="dob" id="dob" ></label>
            <span class="error">* <?php echo $doberr;?></span>

            <label>NIC <input type="text" name="nic" id="nic" ></label>
            <span class="error">* <?php echo $nicerr;?></span>

            <label>Address  <input type="textarea" name="address" id="address" ></label>
            <span class="error">* <?php echo $addresserr;?></span>

            <label>Phone <input type="tel" name="phone" id="phone"  ></label>
            <span class="error">* <?php echo $phoneerr;?></span>
            
            <label>Email <input type="email" name="email" id="email" ></label>
            <span class="error">* <?php echo $emailerr;?></span>
            
            <label>Occupation <input type="text" name="occupation" id="occupation"></label>

            <label>Gender <select name="gender" id="gender" >
                <option value="">Select gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select></label>
            <span class="error">* <?php echo $gendererr;?></span>
            
            <button type="submit" name = "submit">Register Resident</button>
            <a href = "index.php">Go to Home</a>

        </form>

    </BODY>
</HTML>
>


