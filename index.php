<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country Voting System</title>
    <link rel="stylesheet" href="css/index.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('background_image.jpg'); /* Replace 'background_image.jpg' with your image file */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            /* Add transparency */
            background-color: rgba(255, 255, 255, 0.8); /* Adjust the last value (0.8) for transparency */
        }

        /* Style your content here */
        main {
            padding: 50px;
            color: #333;
        }

        section {
            background-color:orange;  /* Transparent black background */
            color: #fff; /* Bright white text */
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Box shadow for card effect */
        }

          ul {
            text-align: center;
            margin-bottom: 20px;
            list-style-type: none; /* Remove bullet points */
            padding-left: 0;}

        .container {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        h2 {
            font-size: 2em;
        }

        p {
            font-size: 1.2em;
        }

        /* Add more styling as needed */

        footer {
            text-align: center;
            background-color: rgba(0, 0, 0, 0.5); /* Adjust the last value (0.5) for footer transparency */
            padding: 20px 0;
            color: #fff;
        }
    </style>
</head>

<body>
    <?php include ('navbar.php'); ?>

    <main>
        <section id="hero">
            <div class="container">
                <h2>Welcome to the Country Voting System</h2>
                <p>Empowering citizens to make their voices heard.</p>
                <a href="routs/register.php" class="btn">Register Now</a>
            </div>
        </section>
        <section id="about">
            <div class="container">
                <h2>About</h2>
                <p>The Country Voting System provides a secure and efficient platform for citizens to participate in the
                    democratic process.</p>
            </div>
        </section>
        <section id="how-it-works">
            <div class="container">
                <h2>How It Works</h2>
                <p>Our voting system ensures transparency, fairness, and accessibility. Here's how it works:</p>
                <ul>
                    <li>Register with your personal information.</li>
                    <li>Verify your identity.</li>
                    <li>Cast your vote securely online.</li>
                    <li>View real-time election results.</li>
                </ul>
            </div>
        </section>
        <section id="contact">
            <div class="container">
                <h2>Contact Us</h2>
                <p>If you have any questions or need assistance, feel free to contact us. We're here to help!</p>
                <a href="contact.php" class="btn">Contact Us</a>
            </div>
        </section>
    </main>

    <footer>
        &copy; 2024 Online Voting System. All rights reserved.
    </footer>
</body>

</html>


