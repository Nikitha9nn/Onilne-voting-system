<?php
session_start();
?>
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
    <div class="topbar">

        <h1>ONLINE VOTING SYSTEM</h1>


    </div>

    <center>


        <div class="loginbox">


            <div id="headersection">

            </div>
            <div id="bodysection"></div>
            <div id="loginsection">
                <form action="" method="POST">
                    <h2>Login</h2>

                    <input type="email" name="email" placeholder="Enter email" required><br><br>
                    <input type="password" name="password" placeholder="Enter password" required><br><br>
                    
                    <button id="loginbtn" name="submit" type="submit">Login</button><br><br>
                </form>
            </div>
            <?php
            if(isset($_POST['submit']))
            {
                if(($_POST['email']=='admin@gmail.com')&&($_POST['password']=='admin123'))
                {
                   // $_SESSION['userdata']='admin@gmail.com';
                    //$_SESSION['groupdata']='admin@gmail.com';
                    echo "<script>alert('success');</script>";
                    echo "<script>location.href='admin/routs/dashboard.php';</script>";
                }
            }
            ?>
        </div>
    </center>
</body>

</html>