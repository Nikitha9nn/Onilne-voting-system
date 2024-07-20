<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Voting System</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            color: #fff;
            position: relative;
            min-height: 100vh;
            overflow: auto;
        }

        .background-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('images/aboutus.jpg');
            background-position: center;
            background-size: cover;
            filter: grayscale(50%) brightness(40%);
            z-index: -1;
        }

       



                .content {
    position: relative;
    z-index: 1;
    padding: 20px;
    color: #ffffff; /* Bright white color */
}


        

        .content h1 {
            font-size: 3em;
            margin-bottom: 20px;
            color: orange;
        }

        .content p {
            font-size: 1.2em;
            margin-bottom: 20px;
            max-width: 800px;
            margin: 20px auto;
            line-height: 1.6;
        }

        .card {
            background: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            margin: 20px auto;
            max-width: 800px;
        }

        .card h2 {
            font-size: 2em;
            margin-bottom: 10px;

        }

        .card p,
        .card ul {
            font-size: 1em;
            line-height: 1.6;
        }

        .card ul {
            text-align: left;
            list-style-type: disc;
            margin: 0 auto;
            padding-left: 20px;
            max-width: 760px;
        }

        footer {
            margin-top: 20px;
            padding: 10px;
            color: #ccc;
            text-align: center;
        }

        footer a {
            color: #04AA6D;
            text-decoration: none;
        }
    </style>
</head>

<body class="about">
    <!-- Include the navigation bar using PHP -->
    <?php include 'navbar.php'; ?>

    <div class="background-overlay"></div>
    <div class="content">
        <h1>About Our Online Voting System</h1>
        <p>Online systems, accessible via the internet, streamline tasks and facilitate communication. From e-commerce platforms to collaborative tools, they offer convenience, scalability, and security for diverse user needs.</p>

        <div class="card">
            <h2>Our Mission</h2>
            <p>Our mission is to create an online voting system that ensures accessibility, security, and transparency, empowering citizens to participate in democratic processes from anywhere. Through user-friendly interfaces and robust encryption, we aim to uphold the integrity of elections and foster trust in democratic institutions..</p>
        </div>

        <div class="card">
            <h2>Features</h2>
            <p>Our Online Voting System includes the following features:</p>
            <ul>
                <li>Secure login and authentication</li>
                <li>Real-time vote counting and results</li>
                <li>User-friendly interface</li>
                <li>Comprehensive candidate profiles</li>
                <li>24/7 technical support</li>
            </ul>
        </div>

        <div class="card">
            <h2>Contact Us</h2>
            <p>If you have any questions or need assistance, please feel free to <a href="contact.php">contact us</a>.
                We are here to help!</p>
        </div>
    </div>

    <footer>
        &copy; 2024 Online Voting System. All rights reserved.
    </footer>
</body>

</html>