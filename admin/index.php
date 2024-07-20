<html>

<head>
    <title> Online Voting System</title>
    <link rel="stylesheet" href="css/stylesheet.css">

    <style>
        .loginbox {


            border: none;
            width: 500px;
            height: 400px;
            border-radius: 10px;
            background-color: white;
            margin-top: 100px;


        }

        .topbar {
            height: 100px;
            width: 100%;
            background-color: #5072A7;
            color: white;
            font-weight: bolder;
            text-align: center;
            margin: 0;

        }


        /* .bgimage {
            width: 100%;
        } */
    </style>
</head>
<!-- <section class="bgimage">
    <img src="images/votebg.jpg" alt="">
</section> -->

<body>
    <!-- <div class="topbar">
        <br>
        <h1>ONLINE VOTING SYSTEM</h1>
    </div> -->
    <?php include ('api/navbar.php'); ?>

    <center>


        <div class="loginbox">


            <div id="headersection">

            </div>
            <div id="bodysection"></div>
            <div id="loginsection">
                <form action="api/login.php" method="POST">
                    <h2>Login</h2>

                    <input type="email" name="email" placeholder=" enter email address"
                        style="height:50px; width: 350px;" required><br><br>
                    <input type="password" name="password" placeholder="Enter password"
                        style="height:50px; width: 350px;" required><br><br>
                    <select id="dropbox" name="role" style="height:50px; width: 350px;">
                        <option value="2">Admin</option>
                    </select><br><br>
                    <button id="loginbtn" type="submit">Login</button><br><br>
                    <!-- New User? <a href="routs/register.html">Register Here</a> -->
                </form>
            </div>
        </div>
    </center>
    <footer class="footer">
    &copy; 2024 Online Voting System. All rights reserved.
    </footer>
</body>

</html>