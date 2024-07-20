<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System - Registration</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: orange;
            /* Setting outer page color */
            display: flex;
            justify-content: center;
            flex-direction:column;
            align-items: center;
            min-height: 100vh;
        }

        .card {
            background-color: #fff;
            /* White background for the card */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            width: 90%;
            max-width: 500px;
            margin-bottom:50px;
        }

        .card h2 {
            margin-bottom: 20px;
            font-size: 2em;
        }

        .card input,
        .card select,
        .card button {
            width: calc(100% - 24px);
            /* Adjusting width to account for padding */
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            /* Adding a border */
            font-size: 1em;
        }

        .card input[type="file"] {
            width: auto;
            /* Allowing file input to expand as needed */
        }

        .card button {
            background-color: orange;
            color: #fff;
            cursor: pointer;
            border: none;
            font-size: 1em;
        }

        .card button:hover {
            background-color: darkorange;
        }

        .card a {
            color: #04AA6D;
            text-decoration: none;
        }

        .card a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <?php include ('../navbar.php'); ?>
    <center>
        <div class="card">
            <h2>Registration</h2>
            <form action="../api/register.php" method="post" enctype="multipart/form-data">
                <input type="text" name="name" placeholder="Name" required>
                <input type="text" name="mobile" placeholder="Aadhar Card Number" pattern="^\d{12}$"
                    title="12 digits required" required>
                <input type="password" name="password" placeholder="Password" pattern=".{6,}"
                    title="Six or more characters" required>
                <input type="password" name="cpassword" placeholder="Confirm Password" required>
                <input type="text" name="address" placeholder="Enter Address" required>
                <div>
                    Upload Image: <input type="file" name="photo" required>
                </div>
                <div>
                    <select name="role" required>
                        <option value="1">Voter</option>
                    </select>
                </div>
                <button type="submit">Register</button>
                <br><br>
                Already a User? <a href="../login.php">Login Here</a>
            </form>
        </div>
    </center>
    <footer class="footer">
        &copy; 2024 Online Voting System. All rights reserved.
    </footer>
</body>

</html>