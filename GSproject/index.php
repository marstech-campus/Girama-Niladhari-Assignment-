<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Residential Management</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-image: url('https://images.unsplash.com/photo-1600585154526-990dced4db0d');
            background-size: cover;
            background-position: center; 
            background-repeat: no-repeat; 
            background-attachment: fixed;
            min-height: 100vh;
           
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2rem;
            max-width: 800px;
            margin: 0 auto;
        }

        .header {
            text-align: center;
            margin: 3rem 0;
        }

        h1 {
            color:rgb(240, 229, 15);
            font-size: 2.5rem;
            margin-bottom: 2rem;
            letter-spacing: 1px;
        }

        .button-container {
            display: grid;
            gap: 1.5rem;
            width: 100%;
            max-width: 400px;
            color:white;
        }

        .action-btn {
            padding: 1.2rem 2rem;
            font-size: 1.1rem;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: #ffffff;
            box-shadow: 0 4px 6px rgba(115, 104, 104, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
           
            
        }

        .register-btn {
            background:rgb(4, 22, 35);
            font-weight:bold;

        }

        .search-btn {
            background:rgb(5, 32, 16);
            color: white;
            font-weight:bold;
        }

        .action-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 8px rgba(166, 244, 244, 0.7);
        
        }

        .action-btn:active {
            transform: translateY(2px);
        }
        a{
            color: rgb(228, 242, 251);
        }

        
    </style>
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>Grama Niladhari Residential Management</h1>
        </header>
        
        <div class="button-container">
            <button class="action-btn register-btn">
            <a href="register.php">
                Register
             </a>
            </button>
            <button class="action-btn search-btn">
            <a href="search.php">
                Search
            </a>
            </button>
        </div>
    </div>
</body>
</html>