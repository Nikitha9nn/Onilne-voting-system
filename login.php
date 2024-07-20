<html>

<head>
    <title> Online Voting System</title>
    <link rel="stylesheet" href="css/stylesheet.css">

    <style>
        .loginbox {
            border: none;
            width: 450px;
            height: 400px;
            border-radius: 10px;
            background-color: white;
            margin-top: 100px;

        }

        #dropbox {
            width: 50%;
        }

        input {
            width: 50%;

        }

        .contactbtn {

            float: right;
            height: 30px;
            width: 50px;

        }

        .contactbtn {
            margin-top: 0px;
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
    <?php include ('navbar.php'); ?>
    <!----<div class="topbar">

        <h1>ONLINE VOTING SYSTEM</h1>-->


    </div>

    <center>


        <div class="loginbox">


            <div id="headersection">

            </div>
            <div id="bodysection"></div>
            <div id="loginsection">
                <form action="api/login.php" method="POST">
                    <h2>Login</h2>

                    <input type="text" name="mobile" placeholder="Enter aadhar number" required><br><br>
                    <input type="password" name="password" placeholder="Enter password" required><br><br>
                    <select id="dropbox" name="role">
                        <option value="1">Voter</option>
                       
                    </select><br><br>
                    <button id="loginbtn" type="submit">Login</button><br><br>
                    New User? <a href="routs/register.php">Register Here</a>
                </form>
            </div>
        </div>
    </center>
    <footer class="footer">
        &copy; 2024 Online Voting System. All rights reserved.
    </footer>
</body>

</html>