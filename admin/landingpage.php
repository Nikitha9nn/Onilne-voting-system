<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('https://plus.unsplash.com/premium_photo-1705317716028-ceaa9f2d1786?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            /* Replace 'background_image.jpg' with your image file */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
            padding: 100px 20px;
            color: #000;
        }

        h1 {
            font-size: 3em;
            margin-bottom: 20px;
            
        }

        p {
            font-size: 1.2em;
            margin-bottom: 40px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        footer {
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <?php include("navbar2.php"); ?>

    <div class="container">
        <h1>Welcome to Online Voting System</h1>
        <p>Empowering citizens to make their voices heard.</p>
    </div>

    <footer>
        &copy; 2024 Online Voting System. All rights reserved.
    </footer>
</body>

</html>