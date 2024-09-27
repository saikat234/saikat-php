<?php 
include('connection.php');
$delete_id= $_REQUEST['del_id'];
$sql= "DELETE FROM `multi_user` WHERE `user_id = '$delete_id'";
$data = mysqli_connect($conn,$sql);
if($data)
{
    echo "<script>alert('Data Deleted')</script>";
    echo "<script>window.location.href='login.php'</script>";
}
else
{
    echo "not delete";
}


?>