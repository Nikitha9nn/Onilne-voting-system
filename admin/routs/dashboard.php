<?php
require_once("../api/connect.php");

session_start();
if(!isset($_SESSION['userdata']))//id not activate shift to login page
{
    header("location:../index.html");//shift to home page||if login only go to dashboard or else loginpage
}
//id session not started don open this dashboard page     
$userdata=$_SESSION['userdata'];//whateever user data is present in the above session we store that in this statement /varibale $userdata
$res = mysqli_query($connect,"SELECT * FROM user WHERE `role` = 2");
$groupdata = $res->fetch_all(MYSQLI_ASSOC);
if($_SESSION['userdata']['status']==0)
{
    $status='<b style="color:red">Not Voted</b>';
}
else 
{
    $status='<b style="color:green">Voted</b>';
}

?>

<html>
<head>
    <title>Online Voting System-Dashboard</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
    <style>
         
     

        .topnav {
            overflow: hidden;
            background-color: #333;
            margin-top: 0px;
            padding: 10px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            margin-bottom:20px;
        }

        .topnav a {
            float: left;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #04AA6D;
            color: white;
        }
      #para {
            color: white;
            font-weight: bolder;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 30px;
            text-align: center;
            flex-grow: 1;
            margin: 0;
        }


        .btn {
            padding: 10px;
            border-radius: 5px;
            color: black;
            background-color: white;
            font-size: 15px;
            width: 80px;
            float:right;
            margin:20px;
            font-size: 15px;
            color:black;
            font-weight:bold;
        }

        #headersection{
            padding:18px;
        }

        #group{
            height:150px;
            width:100%;
            background-color:white;
            padding:10px;
            float:right;
            box-size:border-box;
            border-radius:15x;
        }

        #partyimage{
            width: 200px;
            height:100px;
            border-radius:20px;
            float:right;
            padding:10px;
            border-radius:10px;
        }

        #mainpanel{
            margin:auto;
            padding:20px;
            border-radius:20px;
            width:90%;
          
        }

        #votebtn{
            padding:5px;
            font-size:15px;
            color:white;
            font-weight:bold;
            background-color: #4681f4;
            border-radius:5px;
        }

        #voted{
            padding:5px;
            font-size:15px;
            color:white;
            font-weight:bold;
            background-color: green;
            border-radius:5px;
        }

        .justimage{
            width:100%;
            height:auto;
        }

        .fullbox{
            /* Add your styles for the fullbox class here */
        }
        .delete-btn {
            background-color:black;
            padding:10px;
            color:white;
            text-decoration:none;
        }
    </style>
</head>

<body>
    
<body>

    <div class="topnav">
        <div id="para">ONLINE VOTING SYSTEM</div>
        <div>
            <a  class="btn"  href="logout.php">Logout</a>
            <a  class="btn"  href="register.html">Register</a>
        </div>
    </div>

        <div id="mainpanel">
            <?php
            if($_SESSION['groupdata'])
            {
                for($i=0; $i<count($groupdata);$i++)//count function counts the arrays length($groupdata),how many elements inside that,length of that,the length of the elements
                {
                    $groupid = $groupdata[$i]['id'];
                    ?>
                    <div id="group">
                        <div>
                            <img src="../uploads/<?php  echo $groupdata[$i]['photo'] ?>" id="partyimage"  alt="">
                            <b>Group Name: </b><?php  echo $groupdata[$i]['name'] ?><br><br><br><br>
                            <b>Votes:</b> <?php  echo $groupdata[$i]['votes'] ?><br><br> 
                            <a class="delete-btn" href="<?php echo "delete.php?group_id=$groupid"; ?>" >Delete</a>
                            <form action="../api/vote.php" method="post">
                                <input type="hidden" name="gvotes"  value="<?php  echo $groupdata[$i]['votes'] ?>" id="" >
                                <input type="hidden" name="gid"  value="<?php  echo $groupdata[$i]['id'] ?>" id="" >
                            </form>
                        </div>
                        <hr>
                    </div>
                    <?php
                }
            }
            else
            {
                // Handle when there are no group data
            }
            ?>
        </div>
        <footer class="footer">
        &copy; 2024 Online Voting System. All rights reserved.
        </footer>
   
</body>
</html>
