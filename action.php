<?php 
include('connection.php');
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$password = md5($_REQUEST['password']);
$phone = $_REQUEST['phone'];
$gender = $_REQUEST['gender'];
$degree = $_REQUEST['degree'];
$language = implode(',', $_REQUEST['lang']);
$filename = $_FILES['image']['name'];
$tempname = $_FILES['image']['tmp_name'];
$folder = 'upload/'.$filename;
move_uploaded_file($tempname,$folder);
// echo $name,$email,$password,$phone,$gender,$degree,$language;
$check_email = "SELECT email FROM multi_user where email = '$email'";
$emailsql = mysqli_query($conn,$check_email);
$existEmail = mysqli_num_rows($emailsql);
if($existEmail)
{
 echo "<script>alert ('Email id is already exist')</script>";
 echo "<script>window.location.href='form.php'</script>";
}
else
{
$sql = "INSERT INTO `multi_user`(`user_id`, `Name`, `Email`, `Password`, `Phone`, `Gender`, `Degree`, `Language`, `Image`, `user_type`, `auth`) 
VALUES ('','$name','$email','$password','$phone','$gender','$degree','$language','$folder','CLIENT','0')";
$data = mysqli_query($conn,$sql);
if($data)
{
   header("location:login.php");
}
else
{
 echo "Not Inserted";
}
}
?>