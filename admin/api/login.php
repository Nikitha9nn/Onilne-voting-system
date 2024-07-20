<?php

session_start();//
include('connect.php');//mfirst thing for any file connection,already setup ,include here

$email=$_POST['email'];
$password1=$_POST['password'];
$role1=$_POST['role'];//obtain or collect  values given from from index.html 


//write query to check these values(users values) exist in out database/not(mobile,password)
//mysqli_query function-2 parameters,select*from (WHERE mobile='$mobile1'->check column name in database, and entered value by user stored, in $mobile1 is matching or not)
//this query checkes how many records there in db,so how many such records are there that match in database(count),5 r there ,so stored in $check vbl
//and means all 3 condn match or not,//check>0 means user there,else user not there,how many rows returned fn
$check=mysqli_query($connect,"SELECT *FROM user WHERE `name`='$email' AND `password`='$password1'");
if(mysqli_num_rows($check)>0)

{
    $userdata=mysqli_fetch_array($check);//just single user fetch data of 1 user  /so Array function
    $groups=mysqli_query($connect,"SELECT *FROM user WHERE  role='2'");
    $groupdata=mysqli_fetch_all($groups,MYSQLI_ASSOC);//fetch all multiple groups there||HOW MANY GROUPS FETCHED ASSOCIATE THEM AND JOIN THEM ||AND MAKES OBJECT OF ALL ARRAYS||AND STORE IN OBJECT) 



    $_SESSION['userdata']=$userdata;
    //global vbl like post||the user data we fetched store in this session vbl
    $_SESSION['groupdata']=$groupdata;
     //the ugroups data we fetched store in this session vbl   $_SESSION['groupdata']


 echo
   "
   <script>
  
   window.location ='../routs/dashboard.php';
   </script>
   ";


}
else 
{

    echo
   "
   <script>
   alert('Invalid credentials!/user not found');
   window.location ='../';
   </script>

   ";
}//if not there user give msg,shift to index.html page



?>

