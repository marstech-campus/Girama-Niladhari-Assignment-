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
            h3{
                text-align: center;
            }
        </style>

    </HEAD>
    <BODY>

    <?php
        session_start(); 
        if(isset($_SESSION['row_data'])) {
        $row = $_SESSION['row_data']; // get data from session
        }


        ?>
       
        <h1>Grama Niladhari Residents Management System</h1>
        
        <form method="POST" action="modify_process.php">
        <h3>Modify Details</h3>

            

            <label>Full Name  <input type="text" name="fullname" id="fullname"  value= "<?php echo $row['full_name']; ?>"></label>
           
            <label>Date Of Birth <input type="date" name="dob" id="dob" value= "<?php echo $row['dob']; ?>"></label>

            <label>NIC <input type="text" name="nic" id="nic" value= "<?php echo $row['nic']; ?>"></label>

            <label>Address  <input type="textarea" name="address" id="address" value= "<?php echo $row['address']; ?>"></label>

            <label>Phone <input type="tel" name="phone" id="phone" value= "<?php echo $row['phone']; ?>" ></label>
            
            <label>Email <input type="email" name="email" id="email" value= "<?php echo $row['email']; ?>"></label>
            
            <label>Occupation <input type="text" name="occupation" id="occupation" value= "<?php echo $row['occupation']; ?>"></label>

            <label>Gender <select name="gender" id="gender" value= "<?php echo $row['gender']; ?>">
                <option value="">Select gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select></label>
            
            <button type="submit" name = "submit" >Modify</button>

            <a href = "index.php" style="font-size:20px";>Go to Home</a>


        </form>
        

    </BODY>
</HTML>



