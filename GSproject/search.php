<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Residents</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(45deg, #74512D, #4a4a4a);
            color: #fff;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .search-container {
            background: rgba(252, 180, 84, 0.9);
            padding: 60px;
            border-radius: 15px;
            margin: 40px 0;
            box-shadow: 0 8px 32px 0 rgba(9, 13, 68, 0.37);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .search-box {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        #searchInput {
            flex: 2;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .search-button {
            padding: 12px 24px;
            background: #2c3e50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.5s ease;
        }

        .search-button:hover {
            background:rgb(12, 73, 32);
        }


       

        
        
    </style>
</head>
<body>


    


<div class="container">
        <h1>Search Residents</h1>
        
        <form method ="POST" action="search_results.php">
        <div class="search-container">
            <div class="search-box">
                <input type="text" name = "fullname" id="searchInput" placeholder="Search by Full Name"><br>
                <input type="text" name = "nic" id="searchInput" placeholder="Search by NIC Number"><br>
                <input type="text" name = "address" id="searchInput" placeholder="Search by Address"><br>
                
                <button class="search-button" name = "submit">Search</button>
                
        </div>
        </form>
            
        </div>
    </div>

    

   
</body>
</html>