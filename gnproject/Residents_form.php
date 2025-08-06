<?php

$link=mysqli_connect("localhost", "root","" ,"resident_database");

//check connection
if($link===false){
    die("ERROR: COULD NOT CONNECT.".mysqli_connect_error());
}
echo "Connect Sucessfully.Host info".mysqli_get_host_info($link);

mysqli_close($link);


?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    
    // Validate all fields
    $required = ['fullname', 'dob', 'nic', 'address', 'phone', 'email', 'gender'];
    foreach ($required as $field) {
        if (empty($_POST[$field])) {
            $errors[] = "$field is required";
        }
    }
    
    // NIC validation
    if (!preg_match('/^[0-9]{9}[Vv]$/', $_POST['nic'])) {
        $errors[] = "Invalid NIC format";
    }
    
    // Email validation
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }
    
}

?>

<HTML lang="en">
    <HEAD>
        <TITLE>Add Residents </TITLE>
        <style>
            form{
                margin: 20px;
                padding: 15px;
                border: 2px solid black;
                width:500px;
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
            }
            h1{
                text-align: center;
            }
        </style>

    </HEAD>
    <BODY>
        <h1>Residents Management</h1>

        <form method="POST" action="">

            <label>Full Name  <input type="text" name="fullname" id="fullname" required></label>
           
            <label>Date Of Birth <input type="date" name="dob" id="dob" required></label>

            <label>NIC <input type="text" name="nic" id="nic" pattern="[0-9]{9}[VvXx]" required></label>

            <label>Address  <input type="textarea" name="address" id="address" required></label>

            <label>Phone <input type="tel" name="phone" id="phone" pattern="[0-9]{10}" required></label>
            
            <label>Email <input type="email" name="email" id="email" required></label>
            
            <label>Occupation <input type="text" name="occupation" id="occupation"></label>

            <label>Gender <select name="gender" id="gender" required>
                <option value="">Select gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select></label>
            
            <button type="submit">Register Resident</button>


        </form>

    </BODY>
</HTML>
>


