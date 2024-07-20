
<?php
include("connect.php");//connection given

$name1=$_POST['name'];//value collected through post menthod from input tag *name ,stored in $name1 variable
$mobile1=$_POST['mobile'];
$password1=$_POST['password'];
$cpassword1=$_POST['cpassword'];
$address1=$_POST['address'];
$image1=$_FILES['photo']['name']; 
$tmp_name1=$_FILES['photo']['tmp_name']; 
$role1=$_POST['role'];//values collected from frontend

if($password1==$cpassword1)//check password and cpassword match
{
    move_uploaded_file($tmp_name1, "../uploads/$image1");//all images go to  uploads  folder ,name of img goes to database,actual img to upload folder
    $insert=mysqli_query($connect,"INSERT INTO user (name,mobile,password,address,photo,role,status,votes) VALUES('$name1','$mobile1','$password1','$address1','$image1','$role1',0,0)");
    if($insert)
    {
                    echo "
                <script>
                alert('Registration successful');
                window.location= '../routs/dashboard.php';
                </script>
            ";//if insertion successful goes to index.html (login page)
    }
    else
    {
                echo "
                <script>
                alert('invalid credentials');
                window.location = '../routs/register.html';
                </script>
                ";

    }//wen passwords dont match again go back to registration page,inside script tag is js code 
}

else 
{
   echo
   "
   <script>
   alert('Password and Confirm password does not match!!');
   window.location ='../routs/register.html';
   </script>

   ";

}
//if password,cpassword match store imafe in uploads folder||insert values||columns,vbl given above insert stactement

?>
