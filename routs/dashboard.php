<?php
session_start();
if(!isset($_SESSION['userdata']))//id not activate shift to login page
{

    header("location:../index.html");//shift to home page||if login only go to dashboard or else loginpage
}
//id session not started don open this dashboard page     

    $userdata=$_SESSION['userdata'];//whateever user data is present in the above session we store that in this statement /varibale $userdata
    $groupdata=$_SESSION['groupdata'];
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
</head>

<body>
    <style>
        #backbutton{
 padding: 10px;
    

          
    border-radius: 5px;
    font-weight: 900;
    color: white;
    background-color: orange;
    font-size: 15px;
    width: 70px;
     float:left;
     margin:15px;
     border-style:none;
}


        

        #logoutbutton{
            

          padding:10px;
    border-radius: 5px;
    font-weight: 900;
    color: white;
    background-color: orange;
    font-size: 15px;
    width: 70px;
    float:right;
    margin:15px;
      border-style:none;
}

        
        #headersection{
            padding:18px;
        }

        #profile
        {

          
            width:30%;
            background-color:white;
            padding:10px;
            float:left;
            border-radius:10px;
            
        }

        #group{
            height:120px;
            width:60%;
            background-color:white;
            padding:10px;
            float:right;
            box-size:border-box;
            border-radius:5x;
          

        }
        .groups{
             border-radius:15px;

        }



       #partyimage
        {
           
            width: 200px;px;
            height:100px;
           border-radius:20px;
           float:right;
           padding:10px;
             
        }
          
        #mainpanel{
            margin:10px;
             padding:10px;
             border-radius:5px;
        }

        #votebtn
        {
            

              padding: 10px;
    border-radius: 5px;
    font-weight: 900;
    color: white;
    background-color: orange;
    font-size: 15px;
    width: 90px;
}

        

        #voted
        {

            padding:5px;
            font-size:15px;
            color:white;
            font-weight:bold;
            background-color: red;
            border-radius:5px;

        }
        .justimage{
            width:100%;
            height:auto;
        }

        .topbar {


    height: 80px;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    color: white;
    font-weight: bold;
    text-align: center;
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    /* Adding some padding for better spacing */
    padding-top: 10px;
    /* Adding a subtle box shadow for depth */
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    /* Adding a slight border radius for smoother edges */
    border-radius: 5px;

}


h1{margin:auto;}





</style>
<div id="mainsection">
    <center>
         <!-- <div id="headersection">

         <a href="../">   <button id="backbutton">Back</button></a>
           <a href="logout.php"> <button id="logoutbutton">Logout</button></a>
            <h1>Online Voting System</h1>
            <hr>
        </div> -->


        <div class="topbar">
             <a href="../">   <button id="backbutton">Back</button></a>
           <a href="logout.php"> <button id="logoutbutton">Logout</button></a>
        <br>
        <h1>ONLINE VOTING SYSTEM</h1>
    </div>
    <center>
</div>

<div id="mainpanel">
         <div id="profile">
                <center><img class="justimage"  src="../uploads/<?php echo $userdata['photo']; ?>" ><br><br><br></center> <!-- login persons details -->
                <b>Name:</b> <?php echo $userdata['name']; ?> <br><br>
                <b>Aadhar Number:</b><?php echo $userdata['mobile']; ?> <br><br> 
                <b>Address:</b><?php echo $userdata['address']; ?> <br><br>
                <b>Status:</b><?php echo $status ?> <br><br>
                
        </div> 


        
                <?php
                if($_SESSION['groupdata'])
                {
                    for($i=0; $i<count($groupdata);$i++)//count function counts the arrays length($groupdata),how many elements inside that,length of that,the length of the elements
                    {
                        ?><div id="group">
                            <div>
                                <img src="../uploads/<?php  echo $groupdata[$i]['photo'] ?>" id="partyimage"  alt="">
                                <b>Group Name: </b><?php  echo $groupdata[$i]['name'] ?><br><br><br><br>
                                
                                <!-- <b>Votes:</b> <?php  echo $groupdata[$i]['votes'] ?><br><br> -->
                                <form action="../api/vote.php" method="post">
                                    <input type="hidden" name="gvotes"  value="<?php  echo $groupdata[$i]['votes'] ?>" id="" >

                                    <input type="hidden" name="gid"  value="<?php  echo $groupdata[$i]['id'] ?>" id="" >

                                    <?php
                                        if($_SESSION['userdata']['status'] ==0)
                                        {
                                        ?>
                                        <input type="submit" name="votebtn"  value="vote" id="votebtn" >
                                        <?php
                                        }
                                        else
                                        {
                                            ?>
                                            <button disabled type="button" name="votebtn"  value="vote" id="voted" >Voted</button>

                                            <?php

                                            
                                        }

                                        ?>

                                        <hr>
                                
                   
                                </form>
                            </div>
                            </div>
                        <?php

                    }
                }
                        //if database  has  groups in, it will fetch data here in ths vbl,and data  will be set inside session our session and it will activate
                   ?>

 
 <footer class="footer">
        &copy; 2024 Online Voting System. All rights reserved.
    </footer>
  
</body>



</html>