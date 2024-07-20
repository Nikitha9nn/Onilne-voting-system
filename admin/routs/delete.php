<?php 
    require_once("../api/connect.php");
    if(isset($_GET['group_id'])) {
        $gid = $_GET['group_id'];
        $sql = "DELETE FROM user WHERE id = $gid";
        mysqli_query($connect, $sql);
        echo "<script>
        alert('The group has been deleted successfully');
        location.href='/vsystem/admin/routs/dashboard.php';
        </script>";
        exit;
    }