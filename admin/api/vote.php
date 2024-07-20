<?php
session_start();
include('connect.php');

$votes=$_POST['gvotes'];//before how many votes were there in database for that group comes here
$total_votes=$votes+1;//now when new vote added it comes here +1,we add vote
$gid=$_POST['gid'];//we want to know for who this vote is going ,which group,the id that is there here for that vote will go
$uid=$_SESSION['userdata']['id'];//which user voted we want to know,

$update_votes=mysqli_query($connect, "UPDATE user SET votes='$total_votes' WHERE id='$gid' ");//update votes 
$update_user_status=mysqli_query($connect, "UPDATE user SET status=1 WHERE id='$uid' ");//update user||it means the person whose if has come currently .status br default will be zero ,now update it by 1


if($update_votes and $update_user_status )//both condidtions have to be true||if both r true then fetch users and groups data again after voting+1 data||show in dasboard updated data||put in session updated data||
{
    $groups=mysqli_query($connect,"SELECT id, name, votes, photo FROM user WHERE role=2");
    $groupdata=mysqli_fetch_all($groups,MYSQLI_ASSOC);//fetch data od group

    
    $_SESSION['userdata']['status'] = 1;
    $_SESSION['groupdata']=$groupdata;//put in serrion the fetched data


     echo
   "
   <script>
   alert('Voting successful');
   window.location ='../routs/dashboard.php';
   </script>

   ";



}
else
{
    echo
   "
   <script>
   alert('some error occured');
   window.location ='../routs/dashboard.php';
   </script>

   ";
}


?>

